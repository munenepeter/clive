
    <?php
    class Request {


        public function __get($property) {

            if (isset($_POST[$property])) {
                return $_POST[$property];
            }
            if (isset($_GET[$property])) {
                return $_GET[$property];
            }
        }
        public function validate($values = []) {



            $validated = [];
            $error_bag = [];

            foreach ($values as $key => $value) {

                if ($value === 'required') {

                    if (!isset($key) || $this->$key === '') {

                        $error_bag[$key]  = "$key is required";
                    } elseif (isset($key)) {

                        $validated[$key] = trim($this->$key);
                    }
                }
                if ($value === '<18') {
                    if (!isset($key) || $this->$key === '') {

                        $error_bag[$key]  = "$key is required";
                    } elseif (isset($key) && (int)$this->$key <= 18) {

                        $error_bag[$key]  = " $key is less than 18";
                    } elseif (isset($key)) {

                        $validated[$key] = trim($this->$key);
                    }
                }
            }


            if (!empty($error_bag)) {
                return $error_bag;
            } else {
                return $validated;
            }
        }
    }
    $request = new Request();

    echo '<pre>';

    print_r($request->validate([
        'name' => 'required',
        'age' => '>18'
    ]));


