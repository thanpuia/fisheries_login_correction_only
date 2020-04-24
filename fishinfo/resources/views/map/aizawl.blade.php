@extends('layouts.aizawlMapLayout')

@section('content')
    
    <nav class="navbar navbar-default " style="background-color:#1473E7">
        <div class="container-fluid" style="width:80%;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('public/image/logo.jpg')}}" style="width:100px;height:53px; margin-top: -7px;"></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    {{-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li> --}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color:#1473E7">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color:#1473E7">
                            <li><a href="#" style="color:black">All</a></li>
                            <li><a href="#" style="color:black">Aizawl</a></li>
                            <li><a href="#" style="color:black">Kolasib</a></li>
                            <li><a href="#" style="color:black">Lawngtlai</a></li>
                            <li><a href="#" style="color:black">Lunglei</a></li>
                            <li><a href="#" style="color:black">Mamit</a></li>
                            <li><a href="#" style="color:black">Saiha</a></li>
                            <li><a href="#" style="color:black">Serchhip</a></li>
                            <li><a href="#" style="color:black">Champhai</a></li>
                            <li><a href="#" style="color:black">Hnahthial</a></li>
                            <li><a href="#" style="color:black">Saitual</a></li>
                            <li><a href="#" style="color:black">Khawzawl</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div>
        <div class="sidenav" id="mySidenav" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="mainframe left-space">
                <div class="leftframe">District:</div>
                <div class="rightframe" id="district">____</div>
            </div>
            <br>
            <div class="mainframe left-space">
                <div class="leftframe">Address:</div>
                <div class="rightframe" id="address">____</div>
            </div>
            <br>
            <div class="mainframe left-space">
                <div class="leftframe"> Images:</div>
                <div class="rightframe" id="pondImages"></div>
            </div>
            <br>
            
        </div>
        
        <div class="container-fluid">
            <div id="map">

            </div>
        </div>
        
      </div>

      
