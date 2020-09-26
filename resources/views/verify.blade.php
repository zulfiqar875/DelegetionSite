<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Visa Services Platfor (Enjaz)</title>
    <link rel="icon" type="image/ico" href="/images/tittle.jpg" />
</head>
<style>
    body
    {
        background-image: url('/images/main_banner_bg.jpg');
        background-repeat: no-repeat;
    }
    .hd1
    {
        background-color: #055959;
        color: white;
        padding-left: 100px;
        padding-right: 100px; 
        
    }
    #head2 {
        background-color: rgba(255, 255, 255, 0.692);
        padding-left: 100px;
        padding-right: 100px;
        padding-top: 10px;
    }
   
    .main
    {
        
        height: 390px;
    }
/* ==================================== */
.block
{
    padding-top: 50px;
    padding-right: 100px;
    scroll-padding-left: 100px;
}
.f2
{
    border: 1px solid gray;
    padding: 40px;
    background-color: rgba(187, 188, 189, 0.808);
}


/* ========================================================= */
.centered {
  position: absolute;
  top: 50%;
  left: 250px;
  text-align: center;
  color: white;
  font-size: 30px;
  transform: translate(-50%, -50%);
}
.centereded {
  position: absolute;
  top: 50%;
  left: 150px;
  text-align: center;
  color: white;
  font-size: 30px;
  transform: translate(-50%, -50%);
}
.line
{

    border: 0.5px solid teal
}
.s3
{
    padding-left: 200px;
    padding-right: 200px;
}
h4, h6
{
    color: teal;
}
.but
{
    background-color: teal;
    border: none;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 25px;
    padding-right: 25px;
    color: white;
    border-bottom: 4px solid rgb(1, 87, 87)
}
#footer
{
    padding-left: 100px;
    padding-right: 100px;
    padding-top: 50px;
    padding-bottom: 100px;
    height: 300px;
}
h5
{
    color: rgb(149, 199, 74);
}
#foot
{
    background-color: teal;
    color: white;
    height: 60px;
}
.fsize
{
    font-size: 12px;
}
.ftsize
{
    font-size: 14px;
}
.Enjaz
{
    text-align: Center;
    color: white;   
}
.pEnjaz
{
    padding-top: 70px;
}
.navbarSupportedContent > a
{
    text-decoration: none;
}
/* ======================================================== */
#serach
{
    text-align: center
}

</style>
<body>
    <div class="main">
    <nav class="navbar navbar-expand-sm navbar-light hd1" style=" background-color: #055959;">
        <script type="text/javascript" >
            document.write ('<p class="navbar-brand text-white " style="font-size: 15px;">Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
            if (document.getElementById) onload = function () 
            {
            setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
            }
        </script>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline my-3 my-lg-0">
                <div class="btn-group">
                    <button class="btn text-warning " style="font-size: 15px;"><i class="fa fa-comments " aria-hidden="true"><a href="#" class="text-white pl-2" style=" text-decoration: none; ">Home</a></i></button>
                    <button class="btn text-warning" style="font-size: 15px;"><i class="fa fa-life-ring" aria-hidden="true"><a href="#" class="text-white pl-2" style=" text-decoration: none;">Help</a></i></button>
                    <button class="btn text-warning" style="font-size: 15px;"><i class="fa fa-phone" aria-hidden="true"><a href="#" class="text-white pl-2" style=" text-decoration: none;">Technical Support</a></i></button>
                </div>
            </form>
            </div>
            </nav>
        <nav class="navbar navbar-expand-lg navbar-light"id="head2">
            <img class="navbar brand" src="{{url('/images/logo.png')}}" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <button class="btn text-warning " style="font-size: 15px;"><a class="on" href="#" style="color: #055959; text-decoration: none;" >Home</a></button>
                <button class="btn text-warning" style="font-size: 15px;"><a id="on" href="#" style="color: #055959; text-decoration: none;">The Ministry</a></button>
                <button class="btn text-warning" style="font-size: 15px;"><a id="on" href="#" style="color: #055959; text-decoration: none;">Saudi Foreign Policy</a></button>
                <button class="btn text-warning " style="font-size: 15px;"><a id="on" href="#" style="color: #055959; text-decoration: none;">Ministry Service</a></button>
                <button class="btn text-warning" style="font-size: 15px;"><a id="on" href="#" style="color: #055959; text-decoration: none;">Diplomatic Missions</a></button>
                <button class="btn text-warning" style="font-size: 15px;"><a id="on" href="#" style="color: #055959; text-decoration: none;">Contact Us</a></button>
        </nav>

        <div class="pEnjaz">
            <h2 class="Enjaz">Visa Services Platform</h4>
            <h2 class="Enjaz">(Enjaz)</h4>
        </div>
    </div>
    </div>
<!-- ==========================================---------------------------- -->
                                <!-- BODY -->
<!-- ==========================================---------------------------- -->

<div class="container mt-5 mb-5 border border-success p-5">
    <div><h4 class="text-center text-secoundary"> <u> Ratifed the Delegation </u> </h4></div>
    <div class="btns text-left align-center mt-5 mr-5 ml-5 pl-5 pr-5">
        <form id="log" method="post" action="{{url('/ratifed')}}">
            @CSRF
            <div class="row">
                
                <div class="col-md-6">
                    <label for=""class="text-info"> <b> Enter DelegationID: </b></label>
                    <input type="text" name="delegationid" class="form-control border-bottom border-info">
                </div>
                
                <div class="col-md-6">
                    <label for="" class="text-info"><b>Ratifed Name:</b> </label>
                    <input type="text" name="ratifedname" class="form-control border border-info">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">  
                    <input id="A" type="submit" value="Submit" class="btn btn-success mt-4 form-control">
                </div>
            </div>
        </form>
    </div>
</div>


<!-- ==========================================---------------------------- -->
                                <!-- FOOTERS -->
<!-- ==========================================---------------------------- -->
    <div class="div bg-dark " id="footer">
        <div class="row">
            <div class="col-3"> <img src="{{url('/images/mofa_footer_logo.png')}}" alt=""> </div>
            <div class="col-3">
                 <h5>SITEMAP</h5>
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Ministry Addresses and Telephone numbers</dd> </a> 
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;"> Ministry branches inside Kindom</dd></a>
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Suggestions and Complaints</dd></a>
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Privacy Policy</dd></a> 
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Careers</dd></a>
                 <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Tenders</dd> </a>
            </div>
            <div class="col-3">
                <h5>MINISTRY SERVICES</h5>
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Visa Services</dd> </a> 
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Help for Saudi Nationals aboard</dd></a>
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Passport and Trip Details Registration</dd></a>
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Attestation Guidline Services</dd></a> 
            </div>
            <div class="col-3">
                <h5>INFORMATION</h5>
                <a href="" class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">News</dd> </a> 
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Important issues</dd></a>
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Kindom's Speeches in International Forums</dd></a>
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Multimedia</dd></a> 
                <a href=""class="pt-2 text-secondary"> <dd class="ftsize" style="text-decoration: none;">Events and Activities</dd></a>
                
            </div>
        </div>
    </div>

 
        <nav class="navbar navbar-expand-sm navbar-light hd1" style=" background-color: #055959;" id="foot">
            <p class="fsize pt-3">All Rights Reserved 1426-1441 | 2005-2020. Ministry of Foreign Affairs</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <form class="form-inline my-3 my-lg-0">
                    <div class="btn-group">
                        <p class="pt-3 pr-4">Follow Us</p>
                        <button class="btn text-white " style="font-size: 15px;"><i class="fa fa-youtube-play " aria-hidden="true"></i></button>
                        <button class="btn text-white" style="font-size: 15px;"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
                        <button class="btn text-white" style="font-size: 15px;"><i class="fa fa-twitter" aria-hidden="true"></i></button>
                        <button class="btn text-white" style="font-size: 15px;"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                    </div>
                </form>
                </div>
                </nav>
    
</body>
      
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
</html>