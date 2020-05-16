<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; Simakar <script>
            document.write(new Date().getFullYear());
        </script>
        Made with 💜 <div class="bullet"></div> Design By <a href="https://rez4rinaldi.github.io">Reza Rinaldi</a>
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/js/stisla.js"></script>

<!-- Sweetalert JS -->
<script src="<?= base_url(); ?>/assets/js/myscript.js"></script>
<script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>

<script src="<?= base_url() ?>/assets/js/Chart.js"></script>
<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url() ?>/assets/js/scripts.js"></script>
<script src="<?= base_url() ?>/assets/js/custom.js"></script>

<!-- navbar active -->
<script type="text/javascript">
    $(document).ready(() => {
        $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
    })
</script>

<!-- chartjs -->
<script>
    // Get Canvas element by its id
    karyawan_chart = document.getElementById('karyawan').getContext('2d');
    chart = new Chart(karyawan_chart, {
        type: 'line',
        data: {
            labels: [
                /*
                    this is blade templating.
                    we are getting the date by specifying the submonth
                */
                // '{{Carbon\Carbon::now()->subMonths(4)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(3)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(2)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(1)->toFormattedDateString()}}'
            ],
            datasets: [{
                label: 'Pekerjaan Empat Bulan Terakhir',
                data: [
                    // '{{$emp_count_4}}',
                    // '{{$emp_count_3}}',
                    // '{{$emp_count_2}}',
                    // '{{$emp_count_1}}'
                ],
                backgroundColor: [
                    'rgba(178,235,242 ,1)'
                ],
                borderColor: [
                    'rgba(0,150,136 ,1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- leafet ambil koordinat -->
<script>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-7.946263, 112.615548];
    }

    var mymap = L.map('map').setView([-7.946263, 112.615548], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function() {
        var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });
    mymap.addLayer(marker);
</script>

<script>
    $(document).ready(function() {
        $('#mytable').DataTable();

        $('#btnSubmit').click(function() {
            $(this).prop("disabled", true);
            $(this).addClass("btn-progress");
        })
    });
</script>

</body>

</html>