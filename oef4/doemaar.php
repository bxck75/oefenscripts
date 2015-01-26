<html lang="en" class="no-js">
	<head>
            <link rel="stylesheet" type="text/css" href="css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
            <link rel="stylesheet" type="text/css" href="css/demo.css" />
            <link rel="stylesheet" type="text/css" href="css/collapseexpand.css" />
            <script src="js/snap.svg-min.js"></script>
        </head>

            
<body class="theme-5">
    <div class="container">
        <div class="main">
            <div class="box-container clearfix">
<!--                <div class="box box--collapser">
                        <span class="morph-shape morph-shape--color-1" data-morph-active="M273,273c0,0-55.8,24-123,24c-78.2,0-123-24-123-24S3,235.3,3,150C3,79.936,27,27,27,27S72,3,150,3 c85,0,123,24,123,24s24,38.43,24,123C297,229.646,273,273,273,273z;M273,273c0,0-55.8-23-123-23c-78.2,0-123,23-123,23s23-37.7,23-123C50,79.936,27,27,27,27s46,23,124,23 c85,0,122-23,122-23s-23,38.43-23,123C250,229.646,273,273,273,273z">
                                <svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
                                        <path d="M273,273c0,0-55.8,0-123,0c-78.2,0-123,0-123,0s0-37.7,0-123c0-70.064,0-123,0-123s45,0,123,0 c85,0,123,0,123,0s0,38.43,0,123C273,229.646,273,273,273,273z"/>
                                </svg>
                        </span>
                        <button class="trigger"><i class="fa fa-close"></i></button>
                </div>-->
                <div class="box-container box-container--large clearfix">
                    <div id="expander" class="box box--expander">
                            <span class="morph-shape morph-shape--color-5" data-morph-open="M273,273c0,0-55.8-23-123-23c-78.2,0-123,23-123,23s23-37.7,23-123C50,79.936,27,27,27,27s46,23,124,23
c85,0,122-23,122-23s-23,38.43-23,123C250,229.646,273,273,273,273z" data-morph-close="M273,273c0,0-55.8,24-123,24c-78.2,0-123-24-123-24S3,235.3,3,150C3,79.936,27,27,27,27S72,3,150,3 c85,0,123,24,123,24s24,38.43,24,123C297,229.646,273,273,273,273z">
                                    <svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
                                    
                                            <path d="M273,273c0,0-55.8,0-123,0c-78.2,0-123,0-123,0s0-37.7,0-123c0-70.064,0-123,0-123s45,0,123,0c85,0,123,0,123,0s0,38.43,0,123C273,229.646,273,273,273,273z"/>
                                    </svg>
                            </span>
                            <button class="trigger"><i class="fa fa-expand"></i><i class="fa fa-compress"></i></button>
                    </div>
		</div>
           </div>
        </div>
    </div>
    <script src="js/classie.js"></script>
		<script>
			(function() {

				function SVGCollapser( el, options ) {
					this.el = el;
					this.init();
				}

				SVGCollapser.prototype.init = function() {
					this.trigger = this.el.querySelector( 'button.trigger' );
					this.shapeEl = this.el.querySelector( 'span.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = { 
						active : this.shapeEl.getAttribute( 'data-morph-active' ).split(';')
					};
					this.stepsTotal = this.paths.active.length;

					this.initEvents();
				};

				SVGCollapser.prototype.initEvents = function() {
					this.trigger.addEventListener( 'click', this.collapse.bind(this) );
				};

				SVGCollapser.prototype.collapse = function() {
					var self = this, pos = 0,
						nextStep = function( pos ) {
							if( pos > self.stepsTotal - 0.2 ) { return; }
							self.pathEl.stop().animate( { 'path' : self.paths.active[pos] }, pos === 0 ? 200 : 150, pos === 0 ? mina.easeinout : mina.easeout, function() { nextStep(pos); } );
							pos++;
						};

					nextStep(pos);

					setTimeout( function() { classie.add( self.el, 'box--close' ); }, 350 );
				};

				function SVGExpander( el, options ) {
					this.el = el;
					this.init();
				}

				SVGExpander.prototype.init = function() {
					this.trigger = this.el.querySelector( 'button.trigger' );
					this.shapeEl = this.el.querySelector( 'span.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = { 
						reset : this.pathEl.attr( 'd' ),
						open : this.shapeEl.getAttribute( 'data-morph-open' ),
						close : this.shapeEl.getAttribute( 'data-morph-close' )
					};

					this.isOpen = false;
					this.initEvents();
				};

				SVGExpander.prototype.initEvents = function() {
					this.trigger.addEventListener( 'click', this.toggle.bind(this) );
				};

				SVGExpander.prototype.toggle = function() {
					var self = this;

					if( this.isOpen ) {
						this.pathEl.stop().animate( { 'path' : this.paths.close }, 250, mina.easeout, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
						} );
						setTimeout( function() { classie.remove( self.el, 'box--sizeup' ); }, 250 );
					}
					else {
						this.pathEl.stop().animate( { 'path' : this.paths.open }, 250, mina.easeout, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
						} );
						setTimeout( function() { classie.add( self.el, 'box--sizeup' ); }, 250 );
					}
					this.isOpen = !this.isOpen;
				};

				[].slice.call( document.querySelectorAll( '.box--collapser' ) ).forEach( function( el ) { new SVGCollapser(el); } );
				new SVGExpander( document.getElementById( 'expander' ) );
			})();			
		</script>
</body>

