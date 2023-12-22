document.addEventListener('DOMContentLoaded',() => {
    var player1 = new BootstrapVideoplayer('player-9');
        
    })
  

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl,{
          boundary: document.body
      })
    })


