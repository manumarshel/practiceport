            </div> <!-- closes .p-4 page container -->
        </div> <!-- closes .main-content-col -->
    </div> <!-- closes .row -->
</div> <!-- closes .container-fluid -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function fetch_items(txt) {

        var cate = $("#mode_cate").val();
        var type1 = $("#mode_type").val();


        $.ajax({
            type: "POST",
            url: '<?= base_url() . '/user/dashboard-filter' ?>',
            data: {
                category: cate,
                mode_id: type1
            },
            success: function (response) {

                $("#tbodyDiv").empty();

                document.getElementById("tbodyDiv").innerHTML = response;

            }
        });
    }

</script>
</body> 
</html>