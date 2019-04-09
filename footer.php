<div class="container-fluid">
    <footer id="footer">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li class="float-lg-right"><a href="#top">Back to top</a></li>
                    <li>&copy; <a href="#">cybercode</a> 2018</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script>
        $("#myTab a").click(function(a) {
            a.preventDefault();
            $(this).tab("show")
        });
        $("ul.nav-pills > li > a").on("show.bs.tab", function(a) {
            var b = $(a.target).attr("href").substr(1);
            window.location.hash = b
        });
        var hash = window.location.hash;
        $('#myTab a[href="' + hash + '"]').tab("show");
    </script>
    </body>

    </html>
