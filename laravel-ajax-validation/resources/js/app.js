require('./bootstrap');
window.$ = require('jquery');

function addBestOfListener() {

  var target = $('#best_of');
  target.change(bestOfToggle);
}

function bestOfToggle() {

  var me = $(this);
  var isChecked = me.is(':checked');

  getData(isChecked);
}

function getData(bestOf) {

  var url = '/api/posts/all';
  if (bestOf) {

    url = '/api/posts/best-of';
  }

  $.ajax({

    url: url,
    method: 'GET',
    success: function(posts) {

      var target = $('#posts');
      target.html('');

      for (var i=0;i<posts.length;i++) {

        var post = posts[i];
        var html = "<li>" + post ['title'] + ": "
                 + post['like'] + '</li>';
        target.append(html);
      }
    },
    error: function(err) {

      console.log('error', err);
    }
  });
}

function init() {

  addBestOfListener();

  getData(false);
}

$(document).ready(init);
