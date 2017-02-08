<?php get_header() ?>
<body>
     <div>
         <div class="bookInfo">
             <div class="Stats">
                 <!--book/part statistics can go here-->
            </div>
             <div class="bookBlurb">
                <?php/*blurb*/?>
            </div> 
        </div>   
         <div class="book">
            <div class="page">
                <h1><?php/*title(assumong we don't decide to go via a json route*/?><h1>
                <h2><?php/*Author*/?><h2>
                <?php /*get first page, update via*/?>
                <button id='nextPage'>Next Page<!--Icon goes here?--></button>
            </div>
            <div class="index">
                <?php /*available chapters and their names,*/?>
            </div>
        </div>
        <!--comments go here when implemented-->
    </div>
    <?php get_footer()?>
</body>
<?php /*add scripts here*/?>
</html>