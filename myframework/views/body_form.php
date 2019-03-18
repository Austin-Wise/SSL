<form method="POST">
    <div>
    <p id="feedback" class="text-center text-danger"></p>
    </div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="usernameInput">Username</label>
			<input name="username" type="text" class="form-control" id="usernameInput" placeholder="Enter username">
		</div>
		<div class="form-group col-md-6">
			<label for="passwordInput">Password</label>
		    <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<label for="bioTextArea">Bio</label>
	    <textarea name="bio" class="form-control" id="bioTextArea" rows="3"></textarea>
	</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAge"></label>Age</label>
            <select id="inputAge" class="form-control" name="age">
                <option selected value="">Choose...</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
            </select>
        </div>    
        <div class="form-group col-md-3 pt-4 ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="M" checked>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="F">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
    </div>
    <div class="form-group">
            <!-- Captcha -->
            <?

function create_image($cap)

{

unlink("./assets/image1.png");

global $image;

$image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

$background_color = imagecolorallocate($image, 255, 255, 255);

$text_color = imagecolorallocate($image, 0, 255, 255);

$line_color = imagecolorallocate($image, 64, 64, 64);

$pixel_color = imagecolorallocate($image, 0, 0, 255);

imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

for ($i = 0; $i < 3; $i++) {

imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

        }

    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
        }
            $text_color = imagecolorallocate($image, 0, 0, 0);
            ImageString($image, 22, 30, 22, $cap, $text_color);
            $_SESSION["cap"] = $cap;
            imagepng($image, "./assets/image1.png");
        }
        create_image($data["cap"]);
echo "<img src='/assets/image1.png'>";
?>
        </div>

        <div class="form-group">
            <label for="captcha">Enter Captcha</label>
            <input name="cap" type="text" id="captcha" class="form-control"  placeholder="Captcha">
        </div>
    <div class="form-check  pt-2">
        <input class="form-check-input" type="checkbox" name="terms" value="Y" id="checkTerms">
        <label class="form-check-label" for="checkTerms">Accept Terms of Use</label>
    </div>
    <input type='submit' value='Submit' class="btn btn-primary mt-3" onclick='this.form.action="/form/received";' />
    <input type="button" class="btn btn-primary mt-3" value="AJAX Submit" id="ajaxbutton" onclick="send()"></button>
</form>