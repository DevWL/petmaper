// // jquery
// $('document').ready(function(){
//     $hart = $('.btn-like');
//     $hart.one('click', function(e){
//         console.time('jQuery click');
//         e.preventDefault();
//         let $link = $(e.currentTarget);
//         if(e.target){
//             console.log('e.targe: ', e.targe);
//             $link.find('i').toggleClass('far').toggleClass('fas');
//             $value = $link.find('.like').html();
//             $link.find('.like').html(parseInt($value) + 1);
//             console.timeEnd('jQuery click');
//         }
//     })
// });

// Vanila JS state button in onclick event using js literal object as a wrapper
let wrapper = (function(){
    'use strict';
    window.addEventListener("load", function(){
        // GET ALL BUTTONS
        let buttons = document.querySelectorAll('.btn-like');

        // WRAPP EACH BUTTON WITH JS OBJECT
        buttons.forEach((button) => {
            let btnObject = {
                clickedState : false,
                btn: button,
                icon: button.querySelector('i'),
                loadState(){
                    // load api slug url from twig href attr
                    let url = this.btn.getAttribute('href');
                    let link = this.btn.querySelector(".like");
                    $.ajax({
                        type: "POST",
                        url: url,
                    }).done(function(data){
                        link.innerHTML = data.hearts;
                        this.clickedState = data.userVouted;
                        this.loadHeartIcon();
                    }.bind(this));
                    
                },
                loadHeartIcon(){
                    if(this.clickedState === false){
                        this.icon.classList.toggle('far');
                    }else if(this.clickedState === true){
                        this.icon.classList.toggle('fas');
                    }
                },
                toggleHeartIcon(){
                    this.icon.classList.toggle('far');
                    this.icon.classList.toggle('fas');
                },
                actionVoute(){
                    let link = this.btn.querySelector(".like");
                    console.log('link: ', link);

                    let value = parseInt(link.innerHTML);
                    link.innerHTML = value + 1;
                    this.toggleHeartIcon();
                },
                actionUnvote(){
                    let link = this.btn.querySelector(".like");
                    console.log('link: ', link);
                    let value = parseInt(link.innerHTML);
                    link.innerHTML = value - 1;
                    this.toggleHeartIcon();
                },
                addClickEvent(){
                    button.addEventListener("click", (e) => {

                        console.log('this.clickedState: ', this.clickedState);
                        // DO IF NOT CLICKED 
                        if(this.clickedState === false)
                        {
                            // DO SOMETHING EXAMPLE: +1 HART NUMBER
                            this.actionVoute();

                            // CHANGE THE STATE
                            this.clickedState = !this.clickedState;

                        // DO IF CLICKED
                        }else if(this.clickedState === true){
                            // DO SOMETHING EXAMPLE: -1 HART NUMBER
                            this.actionUnvote();

                            // CHANGE THE STATE
                            this.clickedState = !this.clickedState;

                        }
                        e.preventDefault();
                    })
                }, init(){
                    // LOAD STATE HERE
                    this.loadState();
                    // ADD HERE ALL EVENTS
                    this.addClickEvent();
                }
            };
            // INIT ALL
            btnObject.init();
        });
    });
})();