<!DOCTYPE html>
<?php
        include './autoload.php';
        include './views/header.html.php';
        include './views/corps.html.php';
        ?>
        
        <button>Make Call</button>
        <h3>Results</h3>

        <textarea name="results"></textarea>

        <script type="text/javascript">

            document.querySelector('button').addEventListener('click', makeCall);

            function makeCall() {
                var verbfield = document.querySelector('select[name="verb"]');
                var verb = verbfield.options[verbfield.selectedIndex].value;
                var resource = document.querySelector('input[name="resource"]').value;
                var data = {
                    'fullname': document.querySelector('input[name="corp"]').value,
                    'email': document.querySelector('input[name="incorp_dt"]').value,
                    'addressline1': document.querySelector('input[name="email"]').value,
                    'city': document.querySelector('input[name="owner"]').value,
                    'state': document.querySelector('input[name="phone"]').value,
                    'zip': document.querySelector('input[name="location"]').value,
                };
                var results = document.querySelector('textarea[name="results"]');

                var httpRequest = new XMLHttpRequest();

                var url = './api/v1/' + resource;

                httpRequest.open(verb, url, true);
                httpRequest.addEventListener('readystatechange', callComplete);

                function callComplete() {
                    if (this.readyState === XMLHttpRequest.DONE) {
                        console.log(this.responseText);
                        results.value = this.responseText;
                    } // else waiting for the call to complete
                }

                if (verb === 'GET') {
                    httpRequest.send(null);
                } else {
                    httpRequest.setRequestHeader('Content-type', 'application/json;charset=UTF-8');
                    httpRequest.send(JSON.stringify(data));
                }
            }
            </script>
            <?php
        include './views/footer.html.php';
        ?>
        


