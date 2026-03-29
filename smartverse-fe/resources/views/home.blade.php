<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVerse</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f3f4f6;
        }

        .custom-blue {
            color: #1e3a8a;
        }

        .custom-black {
            color: black;
        }

        .custom-header {
            background: #60A5FA;
        }

        .login-btn {
            background: #7fb2ea;
            color: white;
            border-radius: 8px;
            padding: 6px 16px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #5c98dd;
            color: white;
            transform: translateY(-1px);
        }

        .hero {
            background: linear-gradient(220deg, #d9e7fc, #B8D8FF);
            padding: 70px 0;
            color: white;
        }

        .how-card {
            background: #cfe0f7;
            border: none;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
        }

        .step-circle {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #3d7fe0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: auto;
        }

        .upload-box {
            border: 2px dashed #8ab0e6;
            border-radius: 15px;
            background: white;
            padding: 60px 20px;
            text-align: center;
        }

        .upload-icon-wrap {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: #4f8fe8;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }


        .card-shadow {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 12px;
        }


        .icon-box {
            width: 70px;
            height: 70px;
            background: #cfe0f7;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .why-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.03),
                0 8px 18px rgba(0, 0, 0, 0.10);
            text-align: left;
            min-height: 230px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark custom-header">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset('images/logo.png') }}" height="30" class="me-2">
                SmartVerse
            </a>

            <div class="ms-auto d-flex align-items-center gap-3">
                <a class="nav-link text-white" href="#">Home</a>
                <a class="nav-link text-white" href="#">About Us</a>
                <a class="btn login-btn btn-sm">Login</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h1 class="fw-bold custom-black">
                        Summarize PPTs & Videos in<br>
                        <span class="fw-bold custom-blue">Seconds</span> <span class="fw-bold custom-black">and</span>
                        <span class="fw-bold custom-blue">Free</span>
                        <img src="{{ asset('images/lightning.png') }}" height="40" class="ms-0.5">

                    </h1>

                    <p class="mt-3 custom-black">
                        Perfect for busy students. Save time, study more.
                    </p>

                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <button class="btn btn-primary btn-lg me-3 d-flex align-items-center">
                            <img src="{{ asset('images/folder.png') }}" height="22" class="me-2">
                            Upload PPT
                        </button>

                        <button class="btn btn-primary btn-lg me-3 d-flex align-items-center">
                            <img src="{{ asset('images/upload.png') }}" height="22" class="me-2">
                            Upload Video
                        </button>

                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/hero.png') }}" class="img-fluid" style="max-height:320px">
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="fw-bold mb-4 text-center">How SmartVerse Works?</h3>
            <div class="row align-items-center justify-content-center g-3">
                <div class="col-md-3">
                    <div class="card how-card p-4 h-100">
                        <div class="d-flex">
                            <div class="me-3 text-center">
                                <div class="step-circle mb-2">1</div>
                                <img src="{{ asset('images/upload_black.png') }}" width="38">
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1">Upload Files</h5>
                                <p class="text-muted mb-0">
                                    AI reads the files that you uploaded in the current session.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 text-center d-none d-md-block">
                    <span><img src="{{ asset('images/arrow.png') }}" width="45"></span>
                </div>

                <div class="col-md-3">
                    <div class="card how-card p-4 h-100">
                        <div class="d-flex">

                            <div class="me-3 text-center">
                                <div class="step-circle mb-2">2</div>
                                <img src="{{ asset('images/edit.png') }}" width="38">
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1">AI Generates Summary</h5>
                                <p class="text-muted mb-0">
                                    AI will generate the summary based on what it reads.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-1 text-center d-none d-md-block">
                    <span><img src="{{ asset('images/arrow.png') }}" width="45"></span>
                </div>

                <div class="col-md-3">
                    <div class="card how-card p-4 h-100">
                        <div class="d-flex">

                            <div class="me-3 text-center">
                                <div class="step-circle mb-2">3</div>
                                <img src="{{ asset('images/download.png') }}" width="38">
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1">View & Download</h5>
                                <p class="text-muted mb-0">
                                    AI will give a summary in PDF format for you to view and download.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="upload-box">

                        <div class="upload-icon-wrap mb-3">
                            <img src="{{ asset('images/upload.png') }}" width="40">
                        </div>


                        <h4>Upload PPT / Video here</h4>
                        <p class="text-muted" id="file-label">Drag & drop or click to choose file</p>
                        
                        <input type="file" id="main-file-input" style="display: none;" accept=".ppt,.pptx,.pdf,.mp4,.avi">

                        <button id="choose-btn" class="btn btn-primary mt-3" onclick="document.getElementById('main-file-input').click()">
                            Choose File
                        </button>
                        
                        <div id="loading-status" class="mt-3" style="display: none;">
                            <div class="spinner-border text-primary spinner-border-sm" role="status"></div>
                            <span class="ms-2">Processing your file...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">

            <h3 class="fw-bold mb-5">Why SmartVerse?</h3>

            <div class="row g-4">

                <div class="col-md-4 d-flex">
                    <div class="card card-shadow why-card p-4 w-100">
                        <div class="icon-box mb-3">
                            <img src="{{ asset('images/Zap.png') }}" width="36">
                        </div>

                        <h5 class="fw-bold">Extremely Fast Process</h5>
                        <p class="text-muted">Get a complete summary in seconds.</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card card-shadow why-card p-4 w-100">
                        <div class="icon-box mb-3">
                            <img src="{{ asset('images/check_circle.png') }}" width="36">
                        </div>

                        <h5 class="fw-bold">Accurate and Relevant</h5>
                        <p class="text-muted">SmartVerse captures key points and filters out irrelevant info.</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card card-shadow why-card p-4 w-100">
                        <div class="icon-box mb-3">
                            <img src="{{ asset('images/check_circle.png') }}" width="36">
                        </div>
                        <h5 class="fw-bold">Free of Charge</h5>
                        <p class="text-muted">SmartVerse offers no charges at all.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <footer class="text-center py-3 bg-light">
        @ 2026 SmartVerse All Rights Reserved
    </footer>

</body>
<script>
    const fileInput = document.getElementById('main-file-input');
    const fileLabel = document.getElementById('file-label');
    const loadingStatus = document.getElementById('loading-status');
    const chooseBtn = document.getElementById('choose-btn');

    fileInput.addEventListener('change', async function() {
        if (this.files.length === 0) return;

        const file = this.files[0];
        fileLabel.innerText = "Selected: " + file.name;
        chooseBtn.disabled = true;
        fileInput.disabled = true;
        
        // Buat FormData untuk dikirim
        const formData = new FormData();
        formData.append('file', file);
        formData.append('_token', '{{ csrf_token() }}'); // CSRF Protection Laravel

        // Tampilkan loading
        loadingStatus.style.display = 'block';

        try {
            const response = await fetch('/summarize', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (response.ok) {
                sessionStorage.setItem('last_summary', JSON.stringify(result));
                window.location.href = '/summary'; 
            } else {
                alert("Error: " + (result.message || "Failed to process file"));
            }
        } catch (error) {
            console.error(error);
            alert("Connection to AI server failed.");
        } finally {
            loadingStatus.style.display = 'none';
            resetUI();
        }
    });

    function resetUI() {
        chooseBtn.disabled = false;
        fileInput.disabled = false;
        chooseBtn.innerText = "Choose File";
        loadingStatus.style.display = 'none';
    }
</script>

</html>
