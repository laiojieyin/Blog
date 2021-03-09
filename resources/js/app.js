// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// const app = new Vue({
//     el: '#app',
// });

const { use } = require("vue/types/umd");

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

editComment = function(e){
    $(e.currentTarget).closest('.comment-info').siblings('.comment-body').toggleClass('edit');

}

deletePost = function(id){
    let result = confirm('do you want to delete post?');
    if(result){
        let actionurl = '/posts/'+id;
        $.post(actionurl,{_method:'delete'}).done(function(){
            window.location = "/admin";
        });
    }
}

$('form.commentEditForm').submit(function(e){
    e.preventDefault();

    actionUrl = $(e.currentTarget).attr('action');
    comment = $(e.currentTarget).find('[name="content"]').val();
    // console.log(comment)
    $.post(actionUrl,{
        _method:'put',
        content:comment,

    }).done(function(data) {
        console.log(data);
        $(e.currentTarget).closest('.comment-body').toggleClass('edit');
        $(e.currentTarget).siblings('p').html(comment);
    });
});


deleteComment = function(e){
    let result = confirm('do you want to delete comment?');

    let comment = $(e.currentTarget).closest('.media');

    if(result){
        $.post($(e.currentTarget).attr('action'),{
        _method:'delete',
        }).done(function(){
            comment.remove();
        });
    }


}



// $('commentEditForm').submit(function(e){
//     e.preventDefault();
//
//     action = $(e.currentTarget).attr('action');
//     $.post(action,{
//         _method:put,
//         comment:$(e.currentTarget).find('[name="comment"]').val(),
//     }).done(function(){
//
//     });
//
// });
