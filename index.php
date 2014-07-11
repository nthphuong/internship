    <?php


    ?>

<html lang="en">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>REQUESTING MAIL</title>
    <meta name="author" content="GoD.DKVA">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
</head>

<body>

<section id="container">
    <h2>REQUESTING MAIL</h2>
    <form name="form" id="test-form" method="post" action="#">
        <div id="wrapping" class="clearfix">
            <section id="aligned">
                <input type="text" name="uid" id="uid" placeholder="Your ID" autocomplete="off" tabindex="1" class="txtinput" required>

                <input type="text" name="name" id="name" placeholder="Your name" autocomplete="off" tabindex="2" class="txtinput" required>

                <input type="email" name="email" id="email" placeholder="Your e-mail address" autocomplete="off" tabindex="3" class="txtinput" required>

                <input type="text" name="address" id="address" placeholder="Your address" autocomplete="off" tabindex="4" class="txtinput">

            </section>

            <section id="aside" class="clearfix">
                <section id="recipientcase">
                    <h3>Recipient:</h3>
                    <select id="recipient" name="recipient" tabindex="5" class="selmenu">
                        <option value="nhtan">Nguyễn Hữu Tân</option>
                        <br style="clear:both;">
                        <option value="ndvinh">Ngô Đăng Vinh</option>
                    </select>
                </section>

                <section id="prioritycase">
                    <h3>Priority:</h3>
					<span class="radiobadge">
						<input type="radio" id="low" name="priority" value="low">
						<label for="low">Low</label>
					</span>

					<span class="radiobadge">
						<input type="radio" id="med" name="priority" value="med" checked="checked">
						<label for="med">Medium</label>
					</span>

					<span class="radiobadge">
						<input type="radio" id="high" name="priority" value="high">
						<label for="high">High</label>
					</span>
                </section>
            </section>
        </div>


        <section id="buttons">
            <input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
            <input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Submit">
            <br style="clear:both;">
        </section>
    </form>
</section>

</body>
</html>

