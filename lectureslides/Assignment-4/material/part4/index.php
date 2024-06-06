<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Account Sign Up</h1>
                <form action="display_results.php" method="post">

                    <fieldset>
                        <legend>Account Information</legend>
                        <div class="form-group">
                            <label>E-Mail:</label>
                            <input type="text" name="email" value="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" value="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input type="text" name="phone" value="" class="form-control">
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Settings</legend>
                        <p>How did you hear about us?</p>
                        <div class="radio">
                            <label>
                                <input type="radio" name="heard_from" value="Search Engine"> Search engine
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="heard_from" value="Friend"> Word of mouth
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="heard_from" value="Other"> Other
                            </label>
                        </div>

                        <p>Would you like to receive announcements about new products and special offers?</p>
                        <div class="checkbox">
                            <label>
                            <input type="hidden" name="wants_updates" value="0">
                            <input type="checkbox" name="wants_updates" value="1"> YES, I'd like to receive information about new products and special offers.
        </label>
                        </div>

                        <p>Contact via:</p>
                        <div class="form-group">
                            <select name="contact_via" class="form-control">
                                <option value="email">Email</option>
                                <option value="text">Text Message</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                        
                        <p>Comments:</p>
                        <div class="form-group">
                            <textarea name="comments" class="form-control" rows="4" cols="50"></textarea>
                        </div>
                        </fieldset>
                        <input type="submit" value="Submit" class="btn btn-primary">
   

    </form>    
    </main>
</body>
</html>