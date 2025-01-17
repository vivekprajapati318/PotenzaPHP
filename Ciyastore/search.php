<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="icon" href="assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="search-modal modal fade show" id="search-popup" aria-modal="true">
        <div class="search-wrapper modal-dialog">
            <div class="search-modal-content modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="search-modal-content-inner">
                    <div class="search_form-wrap">
                        <div class="search_form-inner search-bg-default">
                            <form class="search-form" role="search" method="get">
                                <div class="search_form-category-wrap">
                                    <select name="search_category" class="search_form-category select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="29">
                                        <option value="" selected="" data-select2-id="31">All Categories</option>
                                        <option value="34"> Men</option>
                                        <option value="35"> Sport</option>
                                        <option value="36"> Women</option>
                                        <option value="58"> Bags</option>
                                        <option value="68"> Kids</option>
                                        <option value="69"> Clothing</option>
                                        <option value="238"> Shirt</option>
                                        <option value="286"> Boys</option>
                                        <option value="287"> Shoes</option>
                                        <option value="298"> Coats &amp; jackets</option>
                                        <option value="299"> Dresswear</option>
                                        <option value="300"> Girls</option>
                                        <option value="302"> Outfits</option>
                                        <option value="303"> Blazers</option>
                                        <option value="304"> Accessories</option>
                                        <option value="308"> Athleisure</option>
                                        <option value="309"> jumpsuits</option>
                                        <option value="310"> Juniors</option>
                                        <option value="311"> New Arrivals</option>
                                        <option value="312"> Pajamas &amp; Robes</option>
                                        <option value="316"> Uncategorized</option>
                                        <option value="328"> Hoodies</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="30" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false" aria-labelledby="select2-search_category-zl-container"><span class="select2-selection__rendered" id="select2-search_category-zl-container" role="textbox" aria-readonly="true" title="All Categories">All Categories</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="search_form-input-wrap">
                                    <input type="hidden" name="post_type" value="product">
                                    <label class="screen-reader-text" for="header-el-search-0">Search for:</label>
                                    <div class="search_form-search-field">
                                        <input type="text" id="header-el-search-0" class="form-control search-form ui-autocomplete-input" value="" name="s" placeholder="Enter Search Keyword..." autocomplete="off">
                                    </div>
                                    <div class="search_form-search-button"> <input value="" type="submit"></div>
                                </div>
                            </form>
                        </div>
                        <div class="search_form-keywords-wrap">
                            <div class="search_form-keywords-title"> Popular Search</div>
                            <div class="search_form-keywords">
                                <ul class="search_form-keywords-list">
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Men</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Women</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Kids</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">New
                                            Arrivals</a></li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Girls</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Blazers</a></li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Boys</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Shoes</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Bags</a>
                                    </li>
                                    <li class="search_form-keyword-single"> <a href="#" class="search-keyword">Clothing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("button.close span").on("click", function() {
                $(".show").hide();
            })
            $(document).on("click", "#search_button", function() {
                $("#search-popup").toggle()
            })
        })
    </script>
</body>

</html>