<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Feedback Form</title>
    <style>label {
            display: block;
        }</style>
</head>
<body>
<!--
<form action="/feedback_form.php" method="post">

    <label>Email Address</label>
    <input type="text" name="email_address" size="40">

    <label>Your Feedback</label>
    <textarea name="feedback" cols="50" rows="10"></textarea>

    <input type="submit" name="send" value="Submit">

</form> -->

<h1>Inspection Form</h1>
<!-- form submit to 'form-to-db.php'-->
<form method="post" action="form_email.php">

    <!-- set timezone-->
    <?php
    date_default_timezone_set("Pacific/Auckland");
    ?>

    <!-- customer's ID here-->
    <p>Customer Number: </p>

    <!-- house address & name here-->
    <p>Address: </p>
    <p>Name: </p>


    <!-- Inspection Date(default date is today)-->
    <!-- ???how to show default date in the box???-->
    <label>Date: <input type="date" name="visitDate" value="<?php echo date("d-m-y"); ?>" required></label>
    <label>To: <input type="email" name="email_address" placeholder="email address"></label>
    <h2>Exterior</h2>

    <div>
        <label>
            Walkways free of clutter, toys, weeds etc?
        </label><br>
        <!-- Input Type Radio Button -->
        <label><input type="radio" name="exteriorOne" value="N/A" required>N/A</label>
        <label><input type="radio" name="exteriorOne" value="Good">Good</label>
        <label><input type="radio" name="exteriorOne" value="Work needed">Work needed</label><br><br>


        <label>
            <div class="comment">Work needed</div>
            <textarea name="commentOne" placeholder="Enter your comment here"></textarea><br><br>
        </label>
    </div>

    <div>
        <label>Fences, gates painted/stained and working?</label><br>

        <!-- checkbox -->
        <label><input type="radio" name="exteriorTwo" value="N/A" required>N/A</label>
        <label><input type="radio" name="exteriorTwo" value="Good">Good</label>
        <label><input type="radio" name="exteriorTwo" value="Work needed">Work needed</label><br><br>


        <div class="comment">Work needed</div>
        <textarea name="commentTwo" id="exterior-comment-two" placeholder="Enter your comment here"></textarea><br><br>
        </label>

    </div>

    <!-- traffic light buttons -->
    <label>traffic light</label><br>
    <label><input type="radio" name="trafficLight" value="1" required>Green</label>
    <label><input type="radio" name="trafficLight" value="2">Orange</label>
    <label><input type="radio" name="trafficLight" value="3">Red</label><br><br>


    <!-- attach photoes -->
    <!-- ???How to set to attach multiple files? -->
    <label>Photo<input type="file" id="exampleInputFile" name="inspectionPhoto" value=""></label><br><br>

    <!-- Inspection Date -->
    <!-- add Google calendar-->
    <label>Next Inspection Date: <input type="date" name="nextDate" value="" placeholder="dd/mm/yyyy"
                                        required></label><br><br>
    <label>Next Inspection Time: <input type="time" name="nextTime" value="" placeholder="02:00 pm"
                                        required></label><br>
    <!--submit button-->
    <button type="submit" value="submit">Submit</button>
    </div>
</form>
</body>

</html>