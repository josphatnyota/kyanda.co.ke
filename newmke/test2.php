<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <title>Kyanda Merchant SA </title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>


    <!-- Icons CSS -->

    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <!-- Nice Select CSS -->
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <!-- Style CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js">

    </script>

    <link rel="stylesheet" href="css/style.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/style.scss">
    <script>
        var subjectObject = {
            "Front-end": {
                "HTML": ["Links", "Images", "Tables", "Lists"],
                "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
                "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]
            },
            "Back-end": {
                "PHP": ["Variables", "Strings", "Arrays"],
                "SQL": ["SELECT", "UPDATE", "DELETE"]
            }
        }
        window.onload = function () {
            var subjectSel = document.getElementById("subject");
            var topicSel = document.getElementById("topic");
            var chapterSel = document.getElementById("chapter");
            for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
            }
            subjectSel.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    topicSel.options[topicSel.options.length] = new Option(y, y);
                }
            }
            topicSel.onchange = function () {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>
</head>

</body>
<header class="intro">
    <img src="assets/kym.png" class="responsive" style="width: 100%; max-width: 300px; " alt="some_text">
    <h1 style="color:#333333;"><b>KYANDA MERCHANT APPLICATION FORM</b></h1>
    <!--<p> Register as a Merchant</p>-->


</header>

<main>
    <article>

        <!-- Start Multiform HTML -->
        <section class="multi_step_form">
            <form id="msform" method="POST" name="submit" action="post.php" enctype="application/x-www-form-urlencoded">
                <!-- Tittle>
                <div class="tittle">
                  <h2>This process will take a few minutes. </h2>
                  <p>In order to start Registration, you have to confirm the following Documents</p>
                </div>-->
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Checklist</li>
                </ul>
                <!-- Checklist -->

                <fieldset>

                    <h3>Business Details</h3>
                    <!-- <div class="form-group fg_4">
                       <select class="product_select">
                         <option data-display="Do you have a Super Merchant Code?">Super Merchant Code?</option>
                         <option value="Yes"> Yes</option>
                         <option value="No">No</option>
                       </select>

                     </div>-->

                    <div class="form-group fg_2">
                        <div class="form-group fg-3">
                             Subjects:
                        <select class=""name="subject" id="subject">
                            <option value="" selected="selected">Select subject</option>
                        </select>
                    </div>
                    <br><br>
                    Topics: <select name="topic" id="topic">
                        <option value="" selected="selected">Please select subject first</option>
                    </select>
                    <br><br>
                    Chapters: <select name="chapter" id="chapter">
                        <option value="" selected="selected">Please select topic first</option>
                    </select>
                    <br><br> </div>

                    <button type="button" class="action-button previous previous_button">Back</button>
                    <button type="button" class="next action-button">Continue</button>

                </fieldset>

            </form>
        </section>
        <!-- END Multiform HTML -->
    </article>
</main>
<footer class="credit"> © 2022, <a title="Kyanda South Africa" href="https://kyanda.co.za/" target="_blank">Kyanda
        Developers</a></footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
<script src="js/script.js"></script>

</script>
<
/body>
< /html>