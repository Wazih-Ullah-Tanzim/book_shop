<!doctype html>
<html lang="en">

<head>
    <title>
        Modal
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- aos css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
     
        body{
            margin-top: -15px;
        }
        #exampleModalCenter>div>div>div {
            color: rgb(255, 255, 255);
            margin: 10px  ;
            background-color: rgba(100, 124, 228, 0.247); 
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            border-radius: 15px;
            padding: 32px;
            backdrop-filter: blur(5px);
            z-index: 1;
        }

        .modal-content {
            border-radius: 25px;
            margin: 6px auto;
            background-color: rgba(255, 255, 255, 0);
            border: 1px solid rgba(255, 255, 255, 0);
            width: 100%;
            border-radius: 15px;
            padding: 32px;
            
            z-index: 1;
        }

        .modal {
            background-color: rgba(0, 0, 0, .5);
        }

        /* font style */
        #exampleModalCenter>div>div>div>h1 {
            font-size: 35px;
        }

        #exampleModalCenter>div>div>div>h3 {
            font-size: 28px;
        }

        #exampleModalCenter>div>div>div>h2 {
            font-size: 25px;
        }
    </style>
</head>


<body>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">


                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">

                            </div> -->
                            <div class="modal-body " data-aos="zoom-in">
                                <h3 class="text-center">Welcome to My Project</h3>
                                <h4 class="text-center">CSE 238(V3) : Database Management System Laboratoy</h4>
                                <h3 class="text-center">Presented to :</h3>
                                <h3 class="text-center"> Mohammad Hasan Sir,Lecturer,</h3> 
                                 <h4 class="text-center"> 
                                    Department of Computer Science & Engineering<br>
                                    Premier University Chittagong<br>
                                </h4>

                                <h3 class="text-center"> <span class="font-weight-bold">Project title :</span> Book Shop Managment System</h3>
                                <h3 class="text-center">Presented by :
                                
                                Wazih Ullah Tanzim <br> (ID-1903710201866)<br>
                               

                                </h3>
                                <div class="date justify-content-end">
                                    <h4 class="text-center"> <span class="font-weight-bold">Date : </span> 24 April 2022
                                    </h4>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $("#exampleModalCenter").modal("show");
            }, 2000);
        });
    </script>

    <!-- aos <script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>