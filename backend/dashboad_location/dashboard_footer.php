</section>

    		<section class="footer_section clear">
    			<footer class="footer clear">
    				<p>&copy; All copyright md rajiur rahman raj </p>
    			</footer>
    		</section>
    	</div>










        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script type="text/javascript">
            var new_pwd = document.getElementById("new_pass");
            var con_pwd = document.getElementById("con_pass");

            document.getElementById('new_eye').addEventListener('click',new_pass_fun);
            document.getElementById('new_con_eye').addEventListener('click',new__con_pass_fun);

            function new_pass_fun(){
                if(new_pwd.type == "password"){
                    new_pwd.type ="text";
                    this.setAttribute('style', 'color:red;margin-left:-35px');
                }else{
                    new_pwd.type = "password";
                    this.setAttribute('style', 'color:#666; margin-left:-35px');
                }
             }

             function new__con_pass_fun(){
                if(con_pwd.type == "password"){
                    con_pwd.type ="text";
                    this.setAttribute('style', 'color:red;margin-left:-35px');
                }else{
                    con_pwd.type = "password";
                    this.setAttribute('style', 'color:#666; margin-left:-35px');
                }
             }
        </script>
    </body>
</html>
