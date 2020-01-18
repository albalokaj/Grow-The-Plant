<!DOCTYPE html>

<html>

<head>
    <title>Grow The Plant</title>
    <link rel="stylesheet" type="text/css" href="Game.css">
    <script src="Game.js"></script>
</head>

<body>


    <div style="display: none" id="Modal2" class="modal2">

        <!-- ************* Modal content **************-->

        <div class="modal2-content">
            <br>
            <form id="form" action="" method="POST">
                <label style="color: white; font-weight: 600; font-size: 30px; font-family: arial; ">Nickname:</label>
                <input name="nickname" id="inp" style="width: 200px; height: 30px; font-size: 25px; margin-left: 15px;" type="text">
                <span style="margin-left: 195px;position: absolute; display: none; color:red" id="err">Enter your nickname!</span>
                <br><br><br>
                <label name="nickname" style="color: white; font-weight: 600; font-size: 30px; font-family: arial;">Your score: </label><input name="score" id="sc" style="width: 200px; height: 30px; font-size: 25px; margin-left: 0px;" type="text">
                <br>
                <br>
                <button onclick="clsModal()" style="background-color:rgba(0, 90, 10, 0.4) ;color: white; font-weight: 600; font-size: 20px; font-family: arial;width: 100px; height: 40px;margin-left: 150px; opacity: 0.8">Enter</button>
            </form>
        </div>
    </div>

    <div>
        <div style="float: right; width: 400px; height: 240px; background-color: rgba(0, 90, 10, 0.4); border-radius: 50px;">

            <span style="font-family: arial; font-weight: 600; color: white; font-size: 42px; margin-left: 143px;">Tools</span>
            <br><br>
            <span style=" margin-left: 80px;font-family: arial; font-weight: 600; color: white; font-size: 15px; ">Water</span>
            <span style="margin-left: 145px;font-family: arial; font-weight: 600; color: white; font-size: 15px; ">Seeds</span>
            <br>
            <div style="display:flex;">
                <img draggable="true" ondragstart="drag(event)" id="water" src="Images/water.png" width="140" height="120">
                <img draggable="true" ondragstart="drag(event)" id="seeds" src="Images/seeds.png" width="140" height="120">
            </div>
            <span id="waterX" style="padding-left: 95px;font-family: arial; font-weight: 600; color: white; font-size: 20px; ">
                5</span><span style="font-family: arial; font-weight: 600; color: white; font-size: 20px;">x</span>
            <span id="seedsX" style="padding-left: 165px;font-family: arial; font-weight: 600; color: white; font-size: 20px; ">
                1</span><span style="font-family: arial; font-weight: 600; color: white; font-size: 20px;">x</span>
        </div>
        <a id="reset" onclick="reset()" style="opacity:0.5 ;position:absolute; margin-left: 420px;"><img draggable="false" width="45" height="45" src="Images/reset.png"></a>
        <div style="width: 400px; height: 45px; background-color: rgba(0, 90, 10, 0.4); border-radius: 50px;">
            <span style="font-family: arial; font-weight: 600; color: white; font-size: 40px; margin-left: 80px; ">Score:
                <span id="score" style="font-family: arial; font-weight: 600; color: white; font-size: 40px; ">0</span>
                <t />pt</span>
        </div>
        <div>
            <img id="soil" ondragover="allowDrop(event)" ondrop="plantDrop(event)" draggable="false" src="Images/1.png" width="200">
            <img id="plant" src="">
        </div>
        <div style="text-align: center;font-family: arial; font-weight: 600; color: white; font-size: 72px; opacity: 0.4;">
            Plant the seeds in soil and water
            the flower until it blooms.
        </div>
        <span style="float:right;font-family: arial; font-weight: 600; color: white; font-size: 30px;" id="timer">15</span>
    </div>
</body>

</html>
