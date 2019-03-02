document.addEventListener('DOMContentLoaded', function() {

    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
});

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
        
});

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems,{alignment:'left',belowOrigin: true,hover:true});
  });

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
 