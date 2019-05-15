
function showPricingPage(){
    $('.pricing_component').css('animation', 'componentShow 1.5s both');
    setTimeout(() => {
        $('body').addClass('stop-scrolling');
        $('html').addClass('stop-scrolling');
    }, 300);
    $('.scroll-nav').css({
        'display':'none'
    })
    
}
function hidePricingPage(){
    $('.pricing_component').css('animation', 'componentHide 1s both');
    setTimeout(() => {
        $('body').removeClass('stop-scrolling');
        $('html').removeClass('stop-scrolling');
        $('.scroll-nav').css({
            'display':'block'
        })
    }, 500);
    
}


function showCaseStudyPage(){
    $('.case_study_component').css('animation', 'componentShow 1.5s both');
    setTimeout(() => {
        $('body').addClass('stop-scrolling');
        $('html').addClass('stop-scrolling');
    }, 300);
    $('.scroll-nav').css({
        'display':'none'
    })
    
}
function hideCaseStudyPage(){
    $('.case_study_component').css('animation', 'componentHide 1s both');
    setTimeout(() => {
        $('body').removeClass('stop-scrolling');
        $('html').removeClass('stop-scrolling');
        $('.scroll-nav').css({
            'display':'block'
        })
    }, 500);
    
}


