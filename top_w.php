
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-arrow-alt-circle-up fs-2"></i></button>
    <a  class="whats-app" href="https://web.whatsapp.com/send?phone=+917053640739"  target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>