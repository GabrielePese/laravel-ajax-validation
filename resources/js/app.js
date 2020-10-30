const { forEach } = require('lodash');

require('./bootstrap');

window.$ = require('jquery');



function addBestOfListener(){
    var target =$('#bestof');
    target.change(bestOfToggle);
}
 function bestOfToggle(){
    var me =$(this);
    var isChecked = me.is(':checked');
    
     getData(isChecked);
 }

function getData(bestOf){

    var url = '/api/posts/all';
    if (bestOf) {

        url = '/api/posts/bestOf'
    }

    $.ajax({
        url: url,
        method:'GET',
        success:function(posts){

            var target = $('#target');
            target.html('');

            for (i = 0; i < posts.length; i++) {
                var post = posts[i];
                var html = "<li>" + post['name'] + " " + post['like'] + "</li>";
            
                
                target.append(html);
            }
        },
        error: function(err){
            console.log(err);
            
        }
    });
}

function  init(){

    getData();
    addBestOfListener();
    bestOf = false;
}

$(document).ready(init);
