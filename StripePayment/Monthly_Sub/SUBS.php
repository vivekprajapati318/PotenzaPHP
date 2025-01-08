<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://source.unsplash.com/1600x900/?food,subscription') no-repeat center center/cover;
            color: white;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            color: black;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #555;
        }

        .form-group label {
            font-weight: 600;
            margin-top: 10px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        #card-element {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        #card-errors {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .card {
                width: 90%;
                padding: 15px;
            }

            .card-title {
                font-size: 1.5rem;
            }

            .card-text {
                font-size: 0.9rem;
            }

            .btn-success {
                font-size: 0.9rem;
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Food Subscription</h5>
                        <p class="card-text">
                            Get fresh, delicious food delivered to your doorstep every day!<br>
                            Affordable plans for a healthier lifestyle.
                        </p>
                        <form action="process.php" id="payment-form" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="card-element">Credit or Debit Card</label>
                                <div id="card-element" class="form-control">
                                    <!-- Stripe Element will be inserted here -->
                                </div>
                                <div id="card-errors" role="alert" class="mt-2"></div>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-block btn-success w-100" value="Subscribe Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const stripe = Stripe('pk_test_51Qd9RQBlCykLAMs1fbgJoWqGE0uGUYWL7s8RBmmiv6qHFsy8klmRaE3xSfNYuayDaIve4zXHsKTQQPDnQDJuSSJC00hm8ryVeI');
        const elements = stripe.elements();
        const style = {
            base: {
                fontSize: '16px',
                color: '#32325d',
            },
        };
        const card = elements.create('card', {
            style
        });
        card.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const {
                token,
                error
            } = await stripe.createToken(card);
            if (error) {
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                stripeTokenHandler(token);
            }
        });

        const stripeTokenHandler = (token) => {
            const form = document.getElementById('payment-form');
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        };
    </script>
</body>

</html>