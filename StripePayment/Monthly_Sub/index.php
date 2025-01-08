<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VP Tiffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body {
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://source.unsplash.com/1600x900/?food,tiffin') no-repeat center center/cover;
            color: white;
        }

        .card-container {
            width: 100%;
            max-width: 380px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .card-header {
            background-color: #007bff !important;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-body {
            padding: 30px;
            text-align: center;
        }

        .pricing-card-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .list-unstyled li {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #333;
            /* Dark color for readability */
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 50px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                    url('https://source.unsplash.com/800x600/?food,tiffin') no-repeat center center/cover;
            }

            .card {
                max-width: 90%;
                margin: 20px;
            }

            .pricing-card-title {
                font-size: 2rem;
            }

            .btn-primary {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="card">
            <div class="card-header">
                VP Tiffin
            </div>
            <div class="card-body">
                <h1 class="pricing-card-title">₹2500<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>5 Rotis</li>
                    <li>Sabjee Variety</li>
                    <li>Free Delivery</li>
                    <li>Papad</li>
                </ul>
                <a href="SUBS.php">
                    <button type="button" class="w-100 btn btn-primary">Subscribe NOW</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>