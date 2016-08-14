/*star*/
 $('#rating-star').on('click', 'a', function () {
            $('#rating-star').data('star', this.innerHTML);
        }).on('mouseenter', 'a', function () {
            setStar(this);
        }).on('mouseleave', 'a', function () {
			var $r_star = $('#rating-star');
            var level = $r_star.data('star');
            var $stars = $r_star.find('a');
            if (level) {
				setStar($stars[level]);
                
            } else {
                $stars.css('background-position', '0 -90px');
            }
        });

        function setStar(star) {
            var $this = $(star);
            var level = $this.html();
            var n;
            if (level == '2') {
                n = '0 -30px';
            } else if (level == '1') {
                n = '0 0';
            } else {
                n = '0 -60px';
            }
            $this.prevAll().andSelf().css('background-position', n);
            $this.nextAll().css('background-position', '0 -90px');
        }