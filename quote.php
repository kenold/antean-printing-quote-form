<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Antean Studios Print Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.css">
    <script src="js/quote.js" charset="utf-8"></script>
</head>

<body onload='calculateTotal()'>

    <div class="container box">
        <div class="content">
            <h1 class="title is-centered">Antean Studios Print Quote Form</h1>
        </div>

        <div class="columns">
            <div class="column">
                <form action="" id="printform" onsubmit="return false;">

                    <!-- PRINT SIZES -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Print Sizes</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">
                                        <select id="print_sizes" name='print_sizes' onchange="calculateTotal()">
                                            <option value="4x5" selected>4.25x5.5</option>
                                            <option value="8x11">8.5x11</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STOCK -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Stock</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">
                                        <select id="stocks" name='stocks' onchange="calculateTotal()">
                                            <option value="14pt" selected>14pt</option>
                                            <option value="16pt">16pt</option>
                                            <option value="17pt">17pt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FRONT SIDE -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Front Side</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <input id="full-color" class="input" type="text" value="Full Color" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Back Side</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">
                                        <select id="back_sides" name='back_sides' onchange="calculateTotal()">
                                            <option value="noprint">No Printing</option>
                                            <option value="full" selected>Full color</option>
                                            <option value="bw">Black and White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COATING -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Coating</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">
                                        <select id="coatings" name='coatings' onchange="calculateTotal()">
                                            <option value="high" selected>High UV Gloss</option>
                                            <option value="matt">Matt both side</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CORNERS -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Corners</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">

                                        <select id="corners" name='corners' onchange="calculateTotal()">
                                            <option value="rounded">Rounded</option>
                                            <option value="standard" selected>Standard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- QUANTITIES -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Quantity</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select">
                                        <select id="quantities" name='quantities' onchange="calculateTotal()">
                                            <option value="1000qty" selected>1000</option>
                                            <option value="2000qty">2000</option>
                                            <option value="2500qty">2500</option>
                                            <option value="3000qty">3000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PRINTING TURNAROUND -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Printing Turnaround</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <label class='radio'><input type="radio"  name="selectedship" value="3day" onclick="calculateTotal()" /> 3 business days</label><br/>
                                    <label class='radio'><input type="radio"  name="selectedship" value="next" checked onclick="calculateTotal()" /> Next business day</label><br/>
                                    <label class='radio'><input type="radio"  name="selectedship" value="today" onclick="calculateTotal()" /> Ready today</label><br/>
                                    <label class='radio'><input type="radio"  name="selectedship" value="7day" onclick="calculateTotal()" /> 7 business day</label><br/></p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TOTAL PRICE -->
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">TOTAL</label>
                        </div>

                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <input id="totalPrice" class="input is-danger" type="text" value="" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Full Name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input type="text" class="input" id="name" name="name" />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Phone Number</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control ">
                                    <input type="text" class="input" id="phone" name="phone" />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Email</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input type="text" class="input" id="email" name="email" />
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- SUBMIT QUOTE BUTTON -->
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-danger" onclick="submitQuote()">
                                        Submit Quote
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="column">
                <div class="content">
                    <p class="subtitle is-4">Debug for Testing</p>
                </div>
                <div id="debug">

                </div>
            </div>
        </div> <!-- columns -->
    </div>     <!--End of container -->

</body>

</html>
