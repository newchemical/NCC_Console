@extends('inc.main')
@section('main')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .tabs {
            display: flex;
        }

        .tablink {
            background-color: #f2f2f2;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .tablink:hover{
            background-color: lightgray;
        }

        .tabcontent {
            display: none;
        }
        .active{
            background-color: lightblue;
        }
        .active:hover{
            background-color: lightblue;
        }
    </style>
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">Dashboard</a>
        <span class="breadcrumb-item active">Create Quotation</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs">
                    <button class="tablink" onclick="openTab('tab1')">Search By Cas No</button>
                    <button class="tablink" onclick="openTab('tab2')">Search By Item Name</button>
                </div>
                <div id="tab1" class="tabcontent">
                    <input type="text" class="form-control" name="casno" id="casno" placeholder="Enter CAS Number">
                </div>
                <div id="tab2" class="tabcontent">
                    <input type="text" class="form-control" name="itemname" id="itemname" placeholder="Enter Item Name">
                </div>
                <div id="productlist"></div>
            </div>
            <div class="w-100">
                <div class="col">
                    <div class="card text-left">
                      <div class="card-body">
                        <table class="table" border="2px">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>GST</th>
                                    <th>Pack Size</th>
                                    <th>Total</th>
                                    <th>availability</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="width: 400px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 80px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 100px"></td>
                                    <td style="width: 150px"></td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openTab(tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.classList.add("active");
        }

        // Set the default tab to be displayed
        document.getElementById("tab1").style.display = "block";
        document.querySelector('.tablink').classList.add('active');

        $(document).ready(function(){
            $("#casno").on('keyup', function(){
                let casno = $(this).val();
                $('#productlist').text(casno);
            });
            $("#itemname").on('keyup', function(){
                let itemname = $(this).val();
                $('#productlist').text(itemname);
            });
        });
    </script>
@endsection
