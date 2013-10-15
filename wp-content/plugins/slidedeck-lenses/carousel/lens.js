(function($){
    SlideDeckLens['carousel'] = function(slidedeck){
        var ns = 'carousel';
        var deck = $(slidedeck).slidedeck();
        var elems = {};
            // The SlideDeck DOM element itself
            elems.slidedeck = deck.deck;
            // The SlideDeck's frame
            elems.frame = elems.slidedeck.closest('.lens-' + ns);
            // The slides within the SlideDeck
            elems.horizontalSlides = deck.slides;
		
		// Only for IE - detect background image url and update style for DD element
    	if( ie <= 8.0 ){
    		elems.horizontalSlides.each(function(ind){
    			if( $(elems.horizontalSlides[ind]).css('background-image') != 'none' ){
    				var imgurl = $(elems.horizontalSlides[ind]).css('background-image').match( /url\([\"\'](.*)[\"\']\)/ )[1];
    				$(elems.horizontalSlides[ind]).css({
    					background: 'none'
    				});
    				elems.horizontalSlides[ind].style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + imgurl + "', sizingMethod='scale')";
    			};
    		});
    	}
        
        deck.slides.each(function(ind){            
            var $slide = deck.slides.eq(ind);            
            $slide.find('.sd2-node-caption a.play-video-alternative').addClass('accent-color');
        });
    };
    
    $(document).ready(function(){
        $('.lens-carousel .slidedeck').each(function(){
            if(typeof($.data(this, 'lens-carousel')) == 'undefined' || $.data(this, 'lens-carousel') == null){
                $.data(this, 'lens-carousel', new SlideDeckLens['carousel'](this));
            }
        });
    });
})(jQuery);