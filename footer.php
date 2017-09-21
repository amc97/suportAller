
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Copyright &copy; 2017 Suporte Aller.co</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
   
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    

    <script src="js/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tickets').DataTable();
        } );
    </script>

    <script>
        $(document).ready(function() {
        $('#summernote').summernote();
        });
</script>

</body>

</html>
