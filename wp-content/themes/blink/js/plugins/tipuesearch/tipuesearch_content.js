$(function(){

     var search_json = [];


     search_json['portfolio'] = {
          'img' : '',
          'title' : '',
          'desc' : ''
     };

     var q = location.search.split('q=')[1] ? location.search.split('q=')[1] : '';

     console.log(q);

});