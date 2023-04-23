<footer class="mt-4 mb-3">
    <div class="container">
        <hr>
        <center> &copy;<span id="year"></span> </center>
    </div>
</footer>

<script>
    var date = new Date();
    var year = date.getFullYear();

    // html attribute to put in year
    var htmlAtt = document.getElementById('year');
    htmlAtt.innerHTML = year;
</script>