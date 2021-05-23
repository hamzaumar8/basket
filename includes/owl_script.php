<script>
    	$('.owl-carousel').owlCarousel({
    		autoplay:true,
    		autoplayHoverPause:true,
    		lazyLoad:true,
    		margin:5,
    		stagePadding:5,
    		responsive:{
    			0:{
    				items:2,
    				dots:true,
                    loop:true,
                    
    				
    			},
    			485:{
    				items:2,
    				dots:false,
                    loop:true
    			
    			},
    			728:{
    				items:3,
    				loop:true
    			},
    			968:{
    				items:4,
    				loop:true
    			},
    			1200:{
    				items:5,
    				dots:true,
    				loop:true
    			}
    		}
    	});

    	$('.owl-carousel').on('mousewheel', '.owl-stage', function (e){
    		if (e.deltaY>0){
    			$('.owl-carousel').trigger('next.owl');
    		}else{
    			$('.owl-carousel').trigger('prev.owl');
    		}
    		e.preventDefault();
    	})

    </script>
    <!--End Owl carousel links and script-->