<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2025 RTO, Inc</span>
    </div>
</footer>
<br>
</div>
</div>

<script>
    $(document).ready(function() {
        var bookmarkedQuestions = <?php echo json_encode($bookmarked_questions); ?>;
        $('.icon').each(function() {
            var qid = $(this).attr('id');
            if (bookmarkedQuestions.includes(qid)) {
                $(this).removeClass('far fa-bookmark').addClass('fas fa-bookmark');
            }
        });

        $('.icon').click(function() {
            var qid = $(this).attr('id');
            var uid = '<?php echo $username; ?>';
            if (uid === "") {
                if (window.confirm("You have to login first for bookmarking questions!!")) {
                    window.location.href = "index.php";
                } else {
                    $('.icon').addClass('far fa-bookmark');
                }
            } else {
                var isBookmarked = $(this).hasClass('fas fa-bookmark');

                if (!isBookmarked) {
                    if (qid != '' && uid != '') {
                        $.ajax({
                            url: 'bookmark.php',
                            method: 'post',
                            data: {
                                qid: qid,
                                uid: uid
                            },
                            success: function() {
                                location.reload();
                            }
                        })
                    }
                } else {
                    if (qid != '' && uid != '') {
                        $.ajax({
                            url: 'deletebookmark.php',
                            method: 'post',
                            data: {
                                qid: qid,
                                uid: uid
                            },
                            success: function() {
                                location.reload();
                            }
                        })
                    }
                }
            }
        });
    });
</script>
<script src="././js/nav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>

</html>