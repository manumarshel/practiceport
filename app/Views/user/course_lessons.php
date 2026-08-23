<?php include('layout/header.php'); ?>

<!-- BREADCRUMBS & TOP PROGRESS BAR -->
<div class="row pt-4 align-items-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('user/dashboard') ?>" class="text-decoration-none text-muted">Dashboard</a></li>
                <li class="breadcrumb-item active fw-bold text-success" aria-current="page"><?= $course['course_name'] ?></li>
                <li class="breadcrumb-item active fw-bold text-success" aria-current="page">  <a href="<?= base_url('user/package-courses/'.$packageId) ?>" class="text-decoration-none">
                     Back to Modules
                    </a>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- COURSE PROGRESS TRACKING BAR -->
<div class="row mt-4">
    <div class="col-12">
        <div class="p-3 bg-white border rounded-3 shadow-sm d-flex align-items-center justify-content-between gap-3">
            <span class="fw-bold text-muted text-uppercase" style="font-size: 13px; min-width: 80px;">Progress</span>
            <!-- Top Progress Bar -->
            <div class="progress flex-grow-1" style="height: 12px; background-color: #f0f2f5; border-radius: 6px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-orange" id="topProgressBar" role="progressbar" 
                     style="width: <?= $progress_percent ?>%;" 
                     aria-valuenow="<?= $progress_percent ?>" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <span class="fw-bold fs-5 text-orange" id="topProgressPercent" style="min-width: 50px; text-align: right;"><?= $progress_percent ?>%</span>
        </div>
    </div>
</div>

<!-- SPLIT COLUMN LAYOUT -->
<div class="row mt-4 g-4 mb-5">
    <!-- LEFT COLUMN - PREVIEW (LESSONS) -->
    <div class="col-lg-4 col-md-5">
        <div class="sim-table-wrapper p-3" style="min-height: 500px; background-color: #f8f9fa;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0 fw-bold">Lessons</h5>
                <span class="badge bg-secondary rounded-pill" id="lessonCountBadge"><?= count($lessons) ?> Items</span>
            </div>

            <!-- Lessons Vertical List -->
            <div class="d-flex flex-column gap-2" id="lessonsList">
                <?php if (!empty($lessons)): 
                    foreach ($lessons as $index => $lesson): 
                        $stepNum = $index + 1;
                        $isActive = ($active_lesson['id'] == $lesson['id'] && $active_lesson['type'] == $lesson['type']);
                        $isCompleted = $lesson['completed'];
                        
                        // Select row class & badge class
                        $rowClass = $isActive ? 'lesson-row-active border-orange-left' : '';
                        $badgeIcon = $isCompleted ? 'bi-check-circle-fill text-success' : ($isActive ? 'bi-play-circle-fill text-orange' : 'bi-circle text-muted');
                        
                        // Icon mapping by type
                        if ($lesson['type'] === 'video') {
                            $avatarBg = '#fff0e6';
                            $avatarColor = '#ff7a00';
                            $avatarIcon = 'bi-play-fill';
                            $smallLabel = 'Video Tutorial';
                        } elseif ($lesson['type'] === 'question') {
                            $avatarBg = '#e8f5e9';
                            $avatarColor = '#198754';
                            $avatarIcon = 'bi-terminal';
                            $smallLabel = 'Simulation';
                        } else {
                            $avatarBg = '#e8f5e9';
                            $avatarColor = '#198754';
                            $avatarIcon = 'bi-clipboard2-check';
                            $smallLabel = '';
                        }
                ?>
                    <div class="lesson-row-card p-3 rounded-3 bg-white border d-flex align-items-center justify-content-between cursor-pointer <?= $rowClass ?>" 
                         data-index="<?= $index ?>" onclick="selectLesson(<?= $index ?>)">
                        <div class="d-flex align-items-center gap-3">
                            <!-- Lesson Rounded Badge Icon -->
                            <div class="lesson-avatar rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 36px; height: 36px; background-color: <?= $avatarBg ?>; color: <?= $avatarColor ?>;">
                                <i class="bi <?= $avatarIcon ?> fs-5"></i>
                            </div>
                            
                            <div>
                                <h6 class="fw-bold mb-0 text-truncate-custom" style="font-size: 14px;"><?= $stepNum ?>. <?= $lesson['title'] ?></h6>
                                <?php if (!empty($smallLabel)): ?>
                                    <small class="text-muted" style="font-size: 11px;"><?= $smallLabel ?></small>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Completion Status Badge -->
                        <div class="lesson-status-badge">
                            <i class="bi <?= $badgeIcon ?> fs-5" id="badge-icon-<?= $index ?>"></i>
                        </div>
                    </div>
                <?php endforeach; else: ?>
                    <div class="text-center p-4 bg-white border rounded-3">
                        <p class="text-muted mb-0">No lessons or simulations uploaded for this course yet.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- RIGHT COLUMN - VIEW (CONTENT) -->
    <div class="col-lg-8 col-md-7">
        <div class="p-4 bg-white border rounded-3 shadow-sm position-relative">
            <!-- Header bar inside View -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0 fw-bold"></h5>
                
                <!-- Complete & Bookmark Buttons -->
                <div class="d-flex gap-2 align-items-center">
                    <button class="btn btn-outline-orange btn-sm fw-semibold d-flex align-items-center gap-2" id="btnMarkComplete" onclick="toggleComplete()">
                        <i class="bi bi-check-circle"></i> <span>Mark as Complete</span>
                    </button>
                    <button class="btn btn-light btn-sm text-muted rounded-3" style="border: 1px solid #ddd;" onclick="toggleBookmark()">
                        <i class="bi bi-bookmark" id="btnBookmarkIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Video Player Wrap (Type: Video) -->
            <div class="video-container rounded-3 mb-4 overflow-hidden position-relative" id="videoPlayerWrap" style="background-color: #0b0f19; height: 420px; position: relative; display: <?= (!empty($active_lesson) && $active_lesson['type'] === 'video') ? 'block' : 'none' ?>;">
                <div id="videoPlayerContainer" style="width: 100%; height: 100%;"></div>
                
                <!-- Custom Overlay to Block Recommendations & More Videos on Pause -->
                <div id="videoCustomOverlay" class="video-custom-overlay" style="display: none;" onclick="resumeVideo()">
                    <div class="overlay-content text-center">
                        <div class="play-button-wrapper mb-3">
                            <div class="play-button-circle">
                                <i class="bi bi-play-fill text-white" style="font-size: 40px; margin-left: 5px;"></i>
                            </div>
                        </div>
                        <h5 class="text-white fw-bold mb-1" id="overlayVideoTitle">Start Video</h5>
                        <p class="text-white-50 small mb-0" id="overlayVideoSubtitle">Click anywhere to play lesson</p>
                    </div>
                </div>
            </div>

            <!-- Question/Simulation Details Wrap (Type: Question) -->
            <div class="question-container p-5 rounded-3 mb-4 border position-relative overflow-hidden" id="questionDetailsWrap" 
                 style="background-color: #fcfcfd; display: <?= (!empty($active_lesson) && $active_lesson['type'] === 'question') ? 'block' : 'none' ?>; border-color: #eaeaea !important;">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge px-3 py-2 text-uppercase font-monospace" id="questionDifficultyBadge" style="background-color: #198754; color: #fff; font-size: 11px;">EASY</span>
                            <span class="text-success fw-bold font-monospace" style="font-size: 12px; letter-spacing: 0.5px;">PRACTICAL SIMULATION</span>
                        </div>
                        <h3 class="fw-bold mb-3 text-dark" id="questionTitleMain">Simulation Title</h3>
                        
                        <div class="d-flex flex-column gap-3 text-secondary pt-3 border-top" style="font-size: 14px;">
                            <div><i class="bi bi-building me-2 text-success fs-5"></i> <strong>Company:</strong> <span id="questionCompany" class="text-dark fw-semibold">Demo Company</span></div>
                            <div><i class="bi bi-folder2-open me-2 text-success fs-5"></i> <strong>Category:</strong> <span id="questionCategory" class="text-dark fw-semibold"><?= strtoupper($course['course_name']) ?></span></div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 mt-4 mt-md-0">
                        <div class="p-4 bg-white border rounded-3 shadow-sm d-flex flex-column gap-3 text-center">
                            <h6 class="fw-bold text-dark mb-0">Simulation Workspace</h6>
                            <p class="text-muted mb-0" style="font-size: 12px;"></p>
                            
                            <!-- Download Button -->
                            <a class="btn btn-outline-success d-flex align-items-center justify-content-center gap-2 py-2 fw-semibold" id="questionDownloadBtn" href="#" target="_blank">
                                <i class="bi bi-download"></i> Download Files
                            </a>
                            <!-- Run Button -->
                            <a class="btn btn-success d-flex align-items-center justify-content-center gap-2 py-2 fw-semibold text-white" id="questionRunBtn" href="#" target="_blank" onclick="enableSimulationCompleteBtn()">
                                <i class="bi bi-play-fill fs-5"></i> Run Simulation
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assessment Details Wrap (Type: Assessment) -->
            <div class="assessment-container p-4 rounded-3 mb-4 position-relative" id="assessmentDetailsWrap" 
                 style="background: #ffffff; display: <?= (!empty($active_lesson) && $active_lesson['type'] === 'assessment') ? 'block' : 'none' ?>;">
                
                <!-- Assessment Top Progress Bar -->
                <div class="d-flex align-items-center justify-content-between pb-3 border-bottom mb-4 flex-wrap gap-2">
                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-semibold text-dark" style="font-size: 14px;">
                            Assessment Progress: <span id="asmtProgressLabel">Question 1 of 1</span>
                        </span>
                        <div class="progress" style="width: 140px; height: 7px; background-color: #f1f5f9; border-radius: 4px;">
                            <div class="progress-bar" id="asmtProgressBar" role="progressbar" style="width: 100%; background: linear-gradient(90deg, #f59e0b, #eab308);"></div>
                        </div>
                        <span class="text-muted small fw-bold" id="asmtPercentText">100%</span>
                    </div>

                    <div>
                        <span class="badge bg-light text-muted border px-3 py-2 fw-normal" style="font-size: 12px;">
                            <i class="bi bi-lock-fill me-1"></i> Run to Complete
                        </span>
                    </div>
                </div>

                <!-- Assessment Title -->
                <h3 class="fw-bold mb-3 text-dark" id="asmtTitleHeading">Assessment Title</h3>

                <!-- Assessment Question HTML Content -->
                <div class="p-3 rounded-3 mb-4 text-dark fs-6" id="asmtQuestionBody" style="background-color: #fafbfc; border: 1px solid #f1f5f9; line-height: 1.75;">
                    Question instructions will load here...
                </div>

                <!-- Action Buttons: Download Files & Run Simulation -->
                <div class="p-3 rounded-3 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3" 
                     style="background: linear-gradient(135deg, #fffbf0 0%, #fff7ed 100%); border: 1px solid #fed7aa;">
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <a class="btn btn-outline-dark bg-white d-inline-flex align-items-center gap-2 py-2 px-3 fw-semibold shadow-sm" id="asmtDownloadBtn" href="#" target="_blank">
                            <i class="bi bi-download"></i> Download Files
                        </a>
                        <a class="btn btn-success text-white d-inline-flex align-items-center gap-2 py-2 px-3 fw-semibold shadow-sm" id="asmtRunBtn" href="#" target="_blank">
                            <i class="bi bi-play-fill fs-5"></i> Run Simulation
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-success fw-semibold small">
                        <i class="bi bi-check-circle-fill"></i> <span>Status: Simulation Run Complete</span>
                    </div>
                </div>

                <!-- Assessment Completion Option Box -->
                <div class="p-4 rounded-3 mb-4 bg-white border" style="box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                    <h6 class="fw-bold text-dark mb-3">Assessment Completion Option</h6>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-file-earmark-text text-secondary fs-4"></i>
                            <span class="text-secondary small fw-semibold" id="asmtUploadedFileNameDisplay">
                                Uploaded Answer File [None]
                            </span>
                        </div>

                        <div>
                            <input type="file" id="asmtAnswerFileInput" style="display: none;" 
                                   accept=".png,.jpg,.jpeg,.pdf,.doc,.docx,.xls,.xlsx,.zip,.csv,.txt" 
                                   onchange="handleAssessmentFileUpload(this)">
                            
                            <!-- Dark Blue Upload Button matching screenshot -->
                            <button type="button" class="btn text-white fw-semibold d-inline-flex align-items-center gap-2 px-4 py-2" 
                                    id="btnAsmtUpload" style="background-color: #1e293b; border-color: #0f172a; border-radius: 6px;"
                                    onclick="document.getElementById('asmtAnswerFileInput').click()">
                                <i class="bi bi-cloud-arrow-up-fill fs-5"></i>
                                <span id="btnAsmtUploadText">Upload answer and complete this assessment.</span>
                            </button>
                        </div>
                    </div>
                    <div id="asmtUploadAlert" class="mt-3 small" style="display: none;"></div>
                </div>

                <!-- Footer Metadata (Company & Category) & Question Navigation -->
                <div class="d-flex align-items-center justify-content-between pt-3 border-top flex-wrap gap-2 text-muted small fw-semibold">
                    <div>
                        Company: <span class="text-dark fw-bold" id="asmtCompanyText">XYZ Stores</span> &nbsp;&nbsp;&nbsp;&nbsp;
                        Category: <span class="text-dark fw-bold" id="asmtCategoryText">GSTR1</span>
                    </div>
                    
                    <div class="d-flex align-items-center gap-2" id="asmtQuestionNavBtns" style="display: none !important;">
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="btnAsmtPrevQ" onclick="prevAsmtQuestion()">
                            <i class="bi bi-chevron-left"></i> Previous Question
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary" id="btnAsmtNextQ" onclick="nextAsmtQuestion()">
                            Next Question <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Title & Description (Global View Content header) -->
            <div class="mb-4" id="globalTitleWrap">
                <h4 class="fw-bold mb-2 text-dark" id="lessonDisplayTitle">
                    <?= !empty($active_lesson) ? $active_lesson['title'] : 'No Lesson Active' ?>
                </h4>
                <p class="text-muted mb-0" id="lessonDisplayDesc" style="line-height: 1.6; font-size: 15px;">
                    <?= !empty($active_lesson) ? $active_lesson['description'] : 'Welcome to the course player. Select a lesson on the left to start.' ?>
                </p>
            </div>

            <!-- Bottom Navigation Bar -->
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                <button class="btn btn-outline-secondary px-4 fw-semibold" id="btnPrevLesson" onclick="prevLesson()">
                    <i class="bi bi-chevron-left me-2"></i> Previous
                </button>
                <button class="btn btn-orange px-4 text-white fw-semibold" id="btnNextLesson" onclick="nextLesson()">
                    Next <i class="bi bi-chevron-right ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- VIMEO PLAYER SDK -->
<script src="https://player.vimeo.com/api/player.js"></script>

<!-- CLIENT STATE VARIABLES & DYNAMIC SCRIPTS -->
<script>
    // Pass PHP data to JavaScript
    var lessons = <?= json_encode($lessons) ?>;
    var activeLesson = <?= json_encode($active_lesson) ?>;
    var currentIndex = 0;
    if (activeLesson && lessons) {
        for (var i = 0; i < lessons.length; i++) {
            if (lessons[i].id == activeLesson.id && lessons[i].type == activeLesson.type) {
                currentIndex = i;
                break;
            }
        }
    }
    var base_url = "<?= base_url() ?>";
    var packageId = <?= json_encode($packageId) ?>;
    var courseId = <?= json_encode($course['course_id']) ?>;

    /**
     * Sanitizes and parses raw YouTube/Vimeo URLs to embed format with strict parameters
     * to remove recommendations, branding, uploader info, and annotations.
     */
    function getCleanEmbedUrl(url) {
        if (!url) return '';
        url = url.trim();

        // Handle case where user pasted direct iframe code containing src="..."
        var srcMatch = url.match(/src="([^"]+)"/);
        if (srcMatch) {
            url = srcMatch[1];
        }

        // Check YouTube raw link
        var ytRegex = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
        var ytMatch = url.match(ytRegex);
        if (ytMatch) {
            return "https://www.youtube.com/embed/" + ytMatch[1] + "?rel=0&modestbranding=1&iv_load_policy=3&showinfo=0";
        }

        // Check Vimeo raw link
        var vimeoRegex = /(?:vimeo\.com\/|player\.vimeo\.com\/video\/)(?:channels\/(?:\w+\/)?|groups\/[^\/]+\/videos\/|showcase\/(?:\w+\/)?video\/|video\/|)?([0-9]+)/;
        var vimeoMatch = url.match(vimeoRegex);
        if (vimeoMatch) {
            return "https://player.vimeo.com/video/" + vimeoMatch[1] + "?title=0&byline=0&portrait=0&badge=0";
        }

        // Check if it is already an embed URL (e.g. YouTube embed or Vimeo player URL)
        if (url.includes('youtube.com/embed/') || url.includes('youtube-nocookie.com/embed/')) {
            if (!url.includes('rel=')) {
                var separator = url.includes('?') ? '&' : '?';
                url += separator + "rel=0&modestbranding=1&iv_load_policy=3&showinfo=0";
            }
            return url;
        }

        if (url.includes('player.vimeo.com/video/')) {
            if (!url.includes('title=')) {
                var separator = url.includes('?') ? '&' : '?';
                url += separator + "title=0&byline=0&portrait=0&badge=0";
            }
            return url;
        }

        return url;
    }

    // YouTube/Vimeo Dynamic Player Integration with Custom Overlay
    var ytPlayer = null;
    var vimeoPlayer = null;
    var currentPlatform = ''; // 'youtube', 'vimeo', or 'other'
    var ytAPIReady = false;

    // Global YouTube ready callback (must be declared before loading script tag)
    window.onYouTubeIframeAPIReady = function() {
        ytAPIReady = true;
        if (window.pendingYTVideoId) {
            initializeYTPlayer(window.pendingYTVideoId);
            window.pendingYTVideoId = null;
        }
    };

    // Load YouTube Iframe API dynamically
    if (!window.YT) {
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    function getYouTubeId(url) {
        if (!url) return null;
        url = url.trim();
        var ytRegex = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
        var match = url.match(ytRegex);
        return match ? match[1] : null;
    }

    function getVimeoDetails(url) {
        if (!url) return null;
        url = url.trim();
        var videoId = null;
        var hash = null;

        // Try parsing query parameter h first
        try {
            var urlObj = new URL(url);
            hash = urlObj.searchParams.get('h');
        } catch (e) {}

        // Regex to find video ID and optionally path-based hash (like vimeo.com/ID/hash or player.vimeo.com/video/ID/hash)
        var vimeoRegex = /(?:vimeo\.com\/|player\.vimeo\.com\/video\/)(?:channels\/(?:\w+\/)?|groups\/[^\/]+\/videos\/|showcase\/(?:\w+\/)?video\/|video\/|)?([0-9]+)(?:\/([a-zA-Z0-9]+))?/;
        var match = url.match(vimeoRegex);
        if (match) {
            videoId = match[1];
            if (!hash && match[2]) {
                hash = match[2];
            }
        }

        if (videoId) {
            return { id: videoId, hash: hash };
        }
        return null;
    }

    function destroyPlayers() {
        if (ytPlayer) {
            try {
                ytPlayer.destroy();
            } catch (e) {
                console.error("Error destroying YT Player:", e);
            }
            ytPlayer = null;
        }
        if (vimeoPlayer) {
            try {
                vimeoPlayer.destroy().catch(function(e) {
                    console.error("Vimeo destroy promise error:", e);
                });
            } catch (e) {
                console.error("Error destroying Vimeo Player:", e);
            }
            vimeoPlayer = null;
        }
        
        // Recreate container completely to avoid async cleanup issues
        var container = document.getElementById('videoPlayerContainer');
        if (container) {
            container.remove();
        }
        
        var wrap = document.getElementById('videoPlayerWrap');
        var overlay = document.getElementById('videoCustomOverlay');
        var newContainer = document.createElement('div');
        newContainer.id = 'videoPlayerContainer';
        newContainer.style.width = '100%';
        newContainer.style.height = '100%';
        if (wrap) {
            wrap.insertBefore(newContainer, overlay);
        }
        currentPlatform = '';
    }

    function loadDynamicPlayer(lesson) {
        destroyPlayers();

        var ytId = getYouTubeId(lesson.video_url);
        var vimeoDetails = getVimeoDetails(lesson.video_url);

        if (ytId) {
            currentPlatform = 'youtube';
            showCustomOverlay('start');
            if (ytAPIReady) {
                initializeYTPlayer(ytId);
            } else {
                window.pendingYTVideoId = ytId;
            }
        } else if (vimeoDetails) {
            currentPlatform = 'vimeo';
            showCustomOverlay('start');
            initializeVimeoPlayer(vimeoDetails);
        } else {
            currentPlatform = 'other';
            hideCustomOverlay();
            var container = document.getElementById('videoPlayerContainer');
            if (container) {
                container.innerHTML = '<iframe src="' + getCleanEmbedUrl(lesson.video_url) + '" style="width: 100%; height: 100%; border: none;" allowfullscreen allow="autoplay; encrypted-media"></iframe>';
            }
        }
    }

    function initializeYTPlayer(videoId) {
        try {
            ytPlayer = new YT.Player('videoPlayerContainer', {
                height: '100%',
                width: '100%',
                videoId: videoId,
                playerVars: {
                    'rel': 0,
                    'modestbranding': 1,
                    'iv_load_policy': 3,
                    'controls': 1,
                    'showinfo': 0,
                    'fs': 1,
                    'disablekb': 0,
                    'autohide': 1
                },
                events: {
                    'onStateChange': onYTStateChange,
                    'onError': function(e) {
                        console.error("YouTube Player Error:", e);
                    }
                }
            });
        } catch (err) {
            console.error("Error creating YouTube player instance:", err);
        }
    }

    function onYTStateChange(event) {
        if (event.data === 1) {
            hideCustomOverlay();
        } else if (event.data === 2) {
            showCustomOverlay('paused');
        } else if (event.data === 0) {
            showCustomOverlay('ended');
            handleVideoCompleted();
        } else if (event.data === -1 || event.data === 5) {
            showCustomOverlay('start');
        }
    }

    function initializeVimeoPlayer(vimeoDetails) {
        if (!vimeoDetails || !vimeoDetails.id) return;

        var container = document.getElementById('videoPlayerContainer');
        if (!container) return;

        try {
            // Create the iframe element directly in the DOM
            var iframe = document.createElement('iframe');
            iframe.id = 'vimeoIframe';
            
            // Build src URL with options and optional privacy hash
            var src = 'https://player.vimeo.com/video/' + vimeoDetails.id + '?title=0&byline=0&portrait=0&badge=0';
            if (vimeoDetails.hash) {
                src += '&h=' + vimeoDetails.hash;
            }
            
            iframe.src = src;
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            iframe.style.border = 'none';
            iframe.setAttribute('allow', 'autoplay; fullscreen; picture-in-picture');
            iframe.setAttribute('allowfullscreen', 'true');
            
            container.appendChild(iframe);

            // Dynamically bind to Vimeo SDK for overlay tracking
            if (typeof Vimeo !== 'undefined' && Vimeo.Player) {
                vimeoPlayer = new Vimeo.Player(iframe);

                vimeoPlayer.on('play', function() {
                    hideCustomOverlay();
                });
                vimeoPlayer.on('pause', function() {
                    showCustomOverlay('paused');
                });
                vimeoPlayer.on('ended', function() {
                    showCustomOverlay('ended');
                    handleVideoCompleted();
                });
            } else {
                console.warn("Vimeo SDK not found. Video will play directly in the iframe.");
            }
        } catch (err) {
            console.error("Error creating Vimeo player instance:", err);
        }
    }

    function resumeVideo() {
        if (currentPlatform === 'youtube' && ytPlayer) {
            if (typeof ytPlayer.playVideo === 'function') {
                ytPlayer.playVideo();
            }
        } else if (currentPlatform === 'vimeo') {
            if (vimeoPlayer && typeof vimeoPlayer.play === 'function') {
                vimeoPlayer.play().catch(function(e) {
                    console.error("Failed to resume Vimeo video programmatically:", e);
                    // Fallback: hide overlay so the user can use native controls
                    hideCustomOverlay();
                });
            } else {
                // If Vimeo Player SDK isn't loaded or active, just hide the overlay
                hideCustomOverlay();
            }
        }
    }

    function handleVideoCompleted() {
        var lesson = lessons[currentIndex];
        if (lesson && lesson.type === 'video' && !lesson.completed) {
            // Enable the button
            var btnComplete = document.getElementById("btnMarkComplete");
            if (btnComplete) {
                btnComplete.innerHTML = '<i class="bi bi-check-circle"></i> <span>Mark as Complete</span>';
                btnComplete.className = "btn btn-outline-orange btn-sm fw-semibold d-flex align-items-center gap-2";
                btnComplete.disabled = false;
                btnComplete.style.opacity = "1";
                btnComplete.style.pointerEvents = "auto";
            }
        }
    }

    function showCustomOverlay(state) {
        var overlay = document.getElementById("videoCustomOverlay");
        var title = document.getElementById("overlayVideoTitle");
        var subtitle = document.getElementById("overlayVideoSubtitle");
        
        if (!overlay) return;
        
        var lesson = lessons[currentIndex];
        
        if (state === 'ended') {
            title.innerText = "Lesson Completed";
            subtitle.innerText = "Click anywhere to replay lesson";
        } else if (state === 'paused') {
            title.innerText = "Video Paused";
            subtitle.innerText = "Click anywhere to resume lesson";
        } else {
            title.innerText = lesson ? lesson.title : "Start Video";
            subtitle.innerText = "Click anywhere to play lesson";
        }
        
        overlay.style.display = "flex";
        overlay.offsetHeight;
        overlay.style.opacity = "1";
        overlay.style.pointerEvents = "auto";
    }

    function hideCustomOverlay() {
        var overlay = document.getElementById("videoCustomOverlay");
        if (!overlay) return;
        
        overlay.style.opacity = "0";
        overlay.style.pointerEvents = "none";
        setTimeout(function() {
            if (overlay.style.opacity === "0") {
                overlay.style.display = "none";
            }
        }, 300);
    }

    // Initialize display and button states on DOM Ready
    document.addEventListener("DOMContentLoaded", function() {
        updatePlayerUI();
    });

    /**
     * Selects and plays a lesson index from list
     */
    function selectLesson(index) {
        if (index < 0 || index >= lessons.length) return;
        currentIndex = index;
        updatePlayerUI();
    }

    /**
     * Updates player iframe, active row highlights, text and buttons
     */
    function updatePlayerUI() {
        if (lessons.length === 0) return;
        
        var lesson = lessons[currentIndex];
        var stepNum = currentIndex + 1;

        // 1. Differentiate Display Panels by Type (Video vs Question vs Assessment)
        var videoWrap = document.getElementById("videoPlayerWrap");
        var questionWrap = document.getElementById("questionDetailsWrap");
        var assessmentWrap = document.getElementById("assessmentDetailsWrap");
        var globalTitleWrap = document.getElementById("globalTitleWrap");

        if (lesson.type === 'video') {
            videoWrap.style.display = "block";
            questionWrap.style.display = "none";
            if (assessmentWrap) assessmentWrap.style.display = "none";
            globalTitleWrap.style.display = "block";
            
            // Dynamically initialize / load the clean player
            loadDynamicPlayer(lesson);
            
            // Update global texts
            document.getElementById("lessonDisplayTitle").innerText = stepNum + ". " + lesson.title;
            document.getElementById("lessonDisplayDesc").innerText = lesson.description || "No description provided for this lesson.";
        } else if (lesson.type === 'question') {
            // Simulation Question
            videoWrap.style.display = "none";
            destroyPlayers();
            questionWrap.style.display = "block";
            if (assessmentWrap) assessmentWrap.style.display = "none";
            globalTitleWrap.style.display = "none"; // Hide bottom text since we show it nicely inside the dashboard panel
            
            // Update question display details
            document.getElementById("questionTitleMain").innerText = stepNum + ". " + lesson.title;
            document.getElementById("questionCompany").innerText = lesson.company_name;
            
            // Set Difficulty Badge color & text
            var diffBadge = document.getElementById("questionDifficultyBadge");
            var diffText = (lesson.question_type || "easy").toUpperCase();
            diffBadge.innerText = diffText;
            if (diffText === 'EASY') {
                diffBadge.style.backgroundColor = "#198754"; // Green
            } else if (diffText === 'INTERMEDIATE') {
                diffBadge.style.backgroundColor = "#ff9800"; // Orange
            } else {
                diffBadge.style.backgroundColor = "#d32f2f"; // Red
            }

            // Set Action Links
            var downloadBtn = document.getElementById("questionDownloadBtn");
            var runBtn = document.getElementById("questionRunBtn");

            runBtn.setAttribute("href", lesson.run_url);

            // Accounting (Category 12) download button disabled logic
            if (lesson.category_id == "12") {
                downloadBtn.classList.add("disabled");
                downloadBtn.setAttribute("href", "javascript:void(0);");
                downloadBtn.style.opacity = "0.5";
                downloadBtn.style.pointerEvents = "none";
            } else {
                downloadBtn.classList.remove("disabled");
                downloadBtn.setAttribute("href", lesson.download_url);
                downloadBtn.style.opacity = "1";
                downloadBtn.style.pointerEvents = "auto";
            }
        } else if (lesson.type === 'assessment') {
            // Course Assessment
            videoWrap.style.display = "none";
            questionWrap.style.display = "none";
            destroyPlayers();
            if (assessmentWrap) assessmentWrap.style.display = "block";
            globalTitleWrap.style.display = "none";

            renderAssessmentQuestion();
        }

        // 2. Update Left Sidebar Active Highlight Styles
        var rows = document.querySelectorAll(".lesson-row-card");
        rows.forEach(function(row, idx) {
            var badgeIcon = document.getElementById("badge-icon-" + idx);
            row.classList.remove("lesson-row-active", "border-orange-left");
            
            // Restore appropriate badge icons based on completed/active state
            if (lessons[idx].completed) {
                badgeIcon.className = "bi bi-check-circle-fill text-success fs-5";
            } else if (idx === currentIndex) {
                badgeIcon.className = "bi bi-play-circle-fill text-orange fs-5";
                row.classList.add("lesson-row-active", "border-orange-left");
            } else {
                badgeIcon.className = "bi bi-circle text-muted fs-5";
            }
        });

        // 3. Update Mark as Complete Button Style & Text
        var btnComplete = document.getElementById("btnMarkComplete");
        if (lesson.completed) {
            btnComplete.innerHTML = '<i class="bi bi-check-circle-fill"></i> <span>Completed</span>';
            btnComplete.className = "btn btn-success btn-sm fw-semibold text-white d-flex align-items-center gap-2";
            btnComplete.disabled = false;
            btnComplete.style.opacity = "1";
            btnComplete.style.pointerEvents = "auto";
        } else if (lesson.type === 'video') {
            btnComplete.innerHTML = '<i class="bi bi-lock-fill"></i> <span>Watch to Complete</span>';
            btnComplete.className = "btn btn-outline-secondary btn-sm fw-semibold d-flex align-items-center gap-2";
            btnComplete.disabled = true;
            btnComplete.style.opacity = "0.6";
            btnComplete.style.pointerEvents = "none";
        } else {
            btnComplete.innerHTML = '<i class="bi bi-lock-fill"></i> <span>Run to Complete</span>';
            btnComplete.className = "btn btn-outline-secondary btn-sm fw-semibold d-flex align-items-center gap-2";
            btnComplete.disabled = true;
            btnComplete.style.opacity = "0.6";
            btnComplete.style.pointerEvents = "none";
        }

        // 4. Update Navigation Control buttons disabled states
        var btnPrev = document.getElementById("btnPrevLesson");
        var btnNext = document.getElementById("btnNextLesson");

        // Previous button state
        if (currentIndex === 0) {
            btnPrev.disabled = true;
            btnPrev.classList.add("opacity-50");
        } else {
            btnPrev.disabled = false;
            btnPrev.classList.remove("opacity-50");
        }

        // Next button state (last lesson becomes "Finish Course")
        if (currentIndex === lessons.length - 1) {
            btnNext.innerHTML = 'Finish Module <i class="bi bi-flag-fill ms-2"></i>';
            btnNext.className = "btn btn-success px-4 text-white fw-semibold";
        } else {
            btnNext.innerHTML = 'Next <i class="bi bi-chevron-right ms-2"></i>';
            btnNext.className = "btn btn-orange px-4 text-white fw-semibold";
        }

        // Auto-scroll active item into view within the scroll container
        var activeRow = document.querySelector(".lesson-row-active");
        if (activeRow) {
            activeRow.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    /**
     * Toggles the completion status of the current active video lesson via AJAX
     */
    function toggleComplete(callback) {
        var lesson = lessons[currentIndex];
        var isCompleted = lesson.completed;
        var toggleTo = isCompleted ? 0 : 1;

        $.ajax({
            type: "POST",
            url: base_url + "/user/video-progress/toggle",
            data: {
                video_id: lesson.id,
                item_type: lesson.type, // 'video' or 'question'
                completed: toggleTo,
                package_id: packageId,
                course_id: courseId
            },
            success: function(response) {
                if (response.status === "success") {
                    // Update local lesson completion status
                    lessons[currentIndex].completed = (toggleTo === 1);
                    
                    // Animate and update progress percentage
                    animateProgressBar(response.progress);
                    
                    // Re-render UI
                    updatePlayerUI();

                    // Invoke next step callback if provided
                    if (callback) callback();
                }
            },
            error: function(err) {
                console.error("Error toggling item completion progress:", err);
            }
        });
    }

    /**
     * Enables the Mark as Complete button for a simulation after Run is clicked
     */
    function enableSimulationCompleteBtn() {
        var lesson = lessons[currentIndex];
        if (!lesson.completed && lesson.type !== 'video') {
            var btnComplete = document.getElementById("btnMarkComplete");
            btnComplete.innerHTML = '<i class="bi bi-check-circle"></i> <span>Mark as Complete</span>';
            btnComplete.className = "btn btn-outline-orange btn-sm fw-semibold d-flex align-items-center gap-2";
            btnComplete.disabled = false;
            btnComplete.style.opacity = "1";
            btnComplete.style.pointerEvents = "auto";
        }
    }

    /**
     * Triggers dynamic slide shift to the previous lesson
     */
    function prevLesson() {
        if (currentIndex > 0) {
            currentIndex--;
            updatePlayerUI();
        }
    }

    /**
     * Automatically marks current lesson completed (with green checkmark), and shifts to the next lesson
     */
    function nextLesson() {
        var lesson = lessons[currentIndex];
        
        // If current lesson is not marked completed yet, auto mark as complete!
        if (lesson && !lesson.completed && lesson.type !== 'assessment') {
            // Set local state immediately for instant checkmark visual
            lessons[currentIndex].completed = true;
            
            // Send completion progress to server
            $.ajax({
                type: "POST",
                url: base_url + "/user/video-progress/toggle",
                data: {
                    video_id: lesson.id,
                    item_type: lesson.type, // 'video' or 'question'
                    completed: 1,
                    package_id: packageId,
                    course_id: courseId
                },
                success: function(response) {
                    if (response && response.status === "success") {
                        if (response.progress !== undefined) {
                            animateProgressBar(response.progress);
                        }
                    }
                    proceedNextIndex();
                },
                error: function(err) {
                    console.error("Error saving lesson progress on Next:", err);
                    proceedNextIndex();
                }
            });
        } else {
            proceedNextIndex();
        }
    }

    /**
     * Navigates index forward or finishes course
     */
    function proceedNextIndex() {
        if (currentIndex < lessons.length - 1) {
            currentIndex++;
            updatePlayerUI();
        } else {
            // Last lesson finished, course is 100%!
            alert("Congratulations! You have completed all lessons in this module! 🎉");
        }
    }

    /**
     * Toggles Bookmark visual icon state
     */
    function toggleBookmark() {
        var icon = document.getElementById("btnBookmarkIcon");
        if (icon.classList.contains("bi-bookmark")) {
            icon.className = "bi bi-bookmark-fill text-warning";
        } else {
            icon.className = "bi bi-bookmark";
        }
    }

    /**
     * Animates progress bar growth
     */
    function animateProgressBar(toPercent) {
        var pBar = document.getElementById("topProgressBar");
        var pText = document.getElementById("topProgressPercent");
        
        pBar.style.width = toPercent + "%";
        pBar.setAttribute("aria-valuenow", toPercent);
        pText.innerText = toPercent + "%";
    }

    var currentAsmtQuestionIndex = 0;

    /**
     * Renders active assessment question content, progress, and file upload states
     */
    function renderAssessmentQuestion() {
        var lesson = lessons[currentIndex];
        if (!lesson || lesson.type !== 'assessment' || !lesson.assessments || lesson.assessments.length === 0) return;

        var totalQ = lesson.assessments.length;
        if (currentAsmtQuestionIndex < 0) currentAsmtQuestionIndex = 0;
        if (currentAsmtQuestionIndex >= totalQ) currentAsmtQuestionIndex = totalQ - 1;

        var asmt = lesson.assessments[currentAsmtQuestionIndex];
        var qNum = currentAsmtQuestionIndex + 1;
        var percent = Math.round((qNum / totalQ) * 100);

        // Update Progress Header
        document.getElementById('asmtProgressLabel').innerText = 'Question ' + qNum + ' of ' + totalQ;
        document.getElementById('asmtProgressBar').style.width = percent + '%';
        document.getElementById('asmtPercentText').innerText = percent + '%';

        // Update Title & Body
        document.getElementById('asmtTitleHeading').innerText = asmt.title || ('<?= esc($course['course_name']) ?> Assessment: Question ' + qNum);
        document.getElementById('asmtQuestionBody').innerHTML = asmt.question;

        // Update Run & Download URLs
        var runBtn = document.getElementById('asmtRunBtn');
        var downloadBtn = document.getElementById('asmtDownloadBtn');
        runBtn.setAttribute('href', asmt.run_url);

        if (asmt.download_url && asmt.download_url !== '#') {
            downloadBtn.setAttribute('href', asmt.download_url);
            downloadBtn.style.display = 'inline-flex';
        } else {
            downloadBtn.style.display = 'none';
        }

        // Update Uploaded file status
        var uploadedDisplay = document.getElementById('asmtUploadedFileNameDisplay');
        if (asmt.submission && asmt.submission.answer_file) {
            uploadedDisplay.innerHTML = '<span class="text-success fw-bold"><i class="bi bi-check2-circle me-1"></i> Uploaded Answer File [' + asmt.submission.answer_file + ']</span>';
            document.getElementById('btnAsmtUploadText').innerText = 'Update Answer Document';
        } else {
            uploadedDisplay.innerHTML = '<span>Uploaded Answer File [None]</span>';
            document.getElementById('btnAsmtUploadText').innerText = 'Upload answer and complete this assessment.';
        }

        // Update Company & Category metadata
        document.getElementById('asmtCompanyText').innerText = asmt.company_name || 'N/A';
        document.getElementById('asmtCategoryText').innerText = '<?= esc($course['course_name']) ?>';

        // Question navigation if total questions > 1
        var navBox = document.getElementById('asmtQuestionNavBtns');
        if (totalQ > 1) {
            navBox.style.setProperty('display', 'flex', 'important');
            document.getElementById('btnAsmtPrevQ').disabled = (currentAsmtQuestionIndex === 0);
            document.getElementById('btnAsmtNextQ').disabled = (currentAsmtQuestionIndex === totalQ - 1);
        } else {
            navBox.style.setProperty('display', 'none', 'important');
        }
    }

    function prevAsmtQuestion() {
        if (currentAsmtQuestionIndex > 0) {
            currentAsmtQuestionIndex--;
            renderAssessmentQuestion();
        }
    }

    function nextAsmtQuestion() {
        var lesson = lessons[currentIndex];
        if (lesson && lesson.assessments && currentAsmtQuestionIndex < lesson.assessments.length - 1) {
            currentAsmtQuestionIndex++;
            renderAssessmentQuestion();
        }
    }

    /**
     * Handles file upload and AJAX submission of student's answer document
     */
    function handleAssessmentFileUpload(input) {
        if (!input.files || input.files.length === 0) return;
        var file = input.files[0];
        var lesson = lessons[currentIndex];
        if (!lesson || lesson.type !== 'assessment' || !lesson.assessments) return;

        var asmt = lesson.assessments[currentAsmtQuestionIndex];
        var formData = new FormData();
        formData.append('answer_file', file);
        formData.append('assessment_id', asmt.id);
        formData.append('course_id', courseId);
        formData.append('package_id', packageId);

        var uploadBtn = document.getElementById('btnAsmtUpload');
        var uploadAlert = document.getElementById('asmtUploadAlert');
        uploadBtn.disabled = true;
        uploadBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status"></span> Uploading...';
        uploadAlert.style.display = 'none';

        $.ajax({
            url: base_url + '/user/assessment/submit',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res) {
                uploadBtn.disabled = false;
                uploadBtn.innerHTML = '<i class="bi bi-cloud-arrow-up-fill fs-5"></i> <span id="btnAsmtUploadText">Update Answer Document</span>';

                if (res.status === 'success') {
                    uploadAlert.className = 'alert alert-success mt-3 py-2 small';
                    uploadAlert.innerHTML = '<i class="bi bi-check-circle-fill me-1"></i> ' + res.message;
                    uploadAlert.style.display = 'block';

                    // Update local data
                    asmt.submitted = true;
                    asmt.submission = { answer_file: res.file_name, status: 'Pending Review' };
                    renderAssessmentQuestion();

                    // Check if all assessment questions in this category are completed
                    var allDone = true;
                    for (var i = 0; i < lesson.assessments.length; i++) {
                        if (!lesson.assessments[i].submitted) allDone = false;
                    }
                    if (allDone) {
                        lesson.completed = true;
                        var badgeIcon = document.getElementById('badge-icon-' + currentIndex);
                        if (badgeIcon) badgeIcon.className = 'bi bi-check-circle-fill text-success fs-5';
                    }

                    // Auto-advance to next question if available
                    if (currentAsmtQuestionIndex < lesson.assessments.length - 1) {
                        setTimeout(function() {
                            nextAsmtQuestion();
                        }, 1200);
                    }
                } else {
                    uploadAlert.className = 'alert alert-danger mt-3 py-2 small';
                    uploadAlert.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-1"></i> ' + (res.message || 'Upload failed.');
                    uploadAlert.style.display = 'block';
                }
            },
            error: function() {
                uploadBtn.disabled = false;
                uploadBtn.innerHTML = '<i class="bi bi-cloud-arrow-up-fill fs-5"></i> <span>Upload answer and complete this assessment.</span>';
                uploadAlert.className = 'alert alert-danger mt-3 py-2 small';
                uploadAlert.innerHTML = 'Server error uploading file. Please try again.';
                uploadAlert.style.display = 'block';
            }
        });
    }
</script>

<style>
    /* Styling variables and custom elements */
    #lessonsList {
        max-height: 520px;
        overflow-y: auto;
        padding-right: 5px;
    }
    
    #lessonsList::-webkit-scrollbar {
        width: 6px;
    }
    #lessonsList::-webkit-scrollbar-track {
        background: #f8f9fa;
        border-radius: 3px;
    }
    #lessonsList::-webkit-scrollbar-thumb {
        background: #ddd;
        border-radius: 3px;
    }
    #lessonsList::-webkit-scrollbar-thumb:hover {
        background: #ccc;
    }

    .text-orange {
        color: #ff7a00 !important;
    }
    
    .btn-orange {
        background-color: #ff7a00 !important;
        border-color: #ff7a00 !important;
        color: #ffffff !important;
        transition: all 0.2s ease;
    }

    .btn-orange:hover {
        background-color: #e86d00 !important;
        border-color: #e86d00 !important;
    }

    .btn-outline-orange {
        color: #ff7a00 !important;
        border-color: #ff7a00 !important;
        background-color: transparent !important;
        transition: all 0.2s ease;
    }

    .btn-outline-orange:hover {
        background-color: #fff3e0 !important;
    }
    
    .progress-bar-orange {
        background-color: #ff7a00 !important;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .lesson-row-card {
        transition: all 0.2s ease;
        border-color: #eee !important;
    }

    .lesson-row-card:hover {
        background-color: #fffbf7 !important;
        transform: translateX(2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }

    /* Active styling */
    .lesson-row-active {
        background-color: #fff8f2 !important;
        border-color: #ffe0cc !important;
        box-shadow: 0 4px 12px rgba(255, 122, 0, 0.05) !important;
    }

    .border-orange-left {
        border-left: 4px solid #ff7a00 !important;
    }

    .text-truncate-custom {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        white-space: normal;
        max-width: 220px;
    }

    /* Premium Video Player Overlay */
    .video-custom-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(11, 15, 25, 0.88);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 99;
        cursor: pointer;
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .play-button-wrapper {
        display: inline-block;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .play-button-circle {
        width: 76px;
        height: 76px;
        background-color: #ff7a00;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 25px rgba(255, 122, 0, 0.5);
        transition: background-color 0.25s ease, box-shadow 0.25s ease;
    }

    .video-custom-overlay:hover .play-button-wrapper {
        transform: scale(1.12);
    }

    .video-custom-overlay:hover .play-button-circle {
        background-color: #e86d00;
        box-shadow: 0 0 35px rgba(255, 122, 0, 0.75);
    }

    .overlay-content {
        color: #ffffff;
        padding: 20px;
        max-width: 80%;
    }

    #overlayVideoTitle {
        font-size: 1.25rem;
        letter-spacing: 0.5px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    #overlayVideoSubtitle {
        letter-spacing: 0.3px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
    }
</style>

<?php include('layout/footer.php'); ?>
