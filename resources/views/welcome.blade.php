@extends('Layouts/master')

@section('container')








<!------ Include the above in your HEAD tag ---------->

<article class="container-fluid mt-5 mb-5">

    <div class="row">


        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">

            <div class="card kl-card kl-xl kl-reveal kl-fade kl-overlay kl-show kl-slide-in">
                <div class="kl-card-block kl-md bg-primary kl-shadow-br kl-overlay">
                    <div class="kl-card-overlay kl-card-overlay-split-v kl-dark kl-inverse">
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure kl-txt-shadow">26k</span>
                                <span class="kl-title">Followers</span>
                            </div>
                        </div>
                        <div class="kl-card-overlay-item">
                            <div class="kl-figure-block">
                                <span class="kl-figure">109</span>
                                <span class="kl-title">Following</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="kl-card-avatar kl-md kl-pm kl-slow"><img class="kl-b-danger kl-b-circle kl-b-3 kl-reveal kl-slow kl-shadow-br kl-spin kl-fade" src="http://lorempixel.com/100/100/people"></a>
                    <div class="kl-background">
                        <img src="dist/img/avatar.png">
                    </div>
                    <div class="kl-card-item kl-pbl kl-card-social kl-slide-in">
                        <hr class="hw">
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                    </div>
                    <div class="kl-card-item kl-ptr kl-show mr-1">
                        <span class="badge badge-danger">Offline</span>
                    </div>
                </div>
            </div> <!-- card end -->





            <div class="card kl-card kl-xl kl-reveal kl-fade kl-show kl-shine kl-spin">
                <div class="kl-card-block kl-md bg-white kl-shadow-br">

                    <div class="kl-card-item kl-pm kl-show kl-txt-shadow text-center">
                        <h3 class="mb-0">Joe Bloggs</h3>
                        <div class=" small">@joebloggs</div>
                    </div>

                    <a href="#" class="kl-card-avatar kl-md kl-pl ml-2"><img class="kl-b-danger kl-b-circle kl-b-3 kl-spin kl-fast kl-shadow kl-shine" src="http://lorempixel.com/100/100/people"></a>
                    <div class="kl-card-item kl-pbr kl-card-social kl-show">
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                    </div>
                    <div class="kl-card-item kl-ptr kl-show mr-1">
                        <span class="badge badge-danger">Offline</span>
                    </div>
                </div>
            </div> <!-- card end -->

        </div><!-- column end -->

        <div class="col-1"></div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">

            <div class="card kl-card kl-xl kl-reveal kl-fade kl-overlay kl-show kl-slide-in kl-shine">
                <div class="kl-card-block bg-primary">
                    <a href="#" class="kl-card-avatar kl-md kl-ptl kl-slow"><img class="kl-b-danger kl-b-corner kl-b-3 kl-slow kl-shadow-br kl-shine" src="http://lorempixel.com/100/100/people"></a>
                </div>
                <div class="kl-card-block kl-lg bg-success kl-shadow-br kl-overlay">
                    <div class="kl-background">
                        <img src="http://www.lorempixel.com/150/150/nature">
                    </div>
                    <div class="kl-card-overlay kl-card-overlay-split-v-4 kl-dark kl-inverse kl-top-in">
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                    </div>
                    <div class="kl-card-item kl-pbl kl-show text-primary kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">109</span>
                            <span class="kl-title text-primary">Following</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pbr kl-show text-primary kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">26k</span>
                            <span class="kl-title text-primary">Followers</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pm kl-show text-white kl-txt-shadow text-center">
                        <h3 class="mb-0">Joe Bloggs</h3>
                        <div class="text-white small">@joebloggs</div>
                    </div>

                    <div class="kl-card-item kl-ptr kl-card-social kl-show">
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAHcElEQVRoQ8VZa2xU1xH+5tzd9RO7xg+CUwzeXQcwSaGCtBLQNqAmbVDSphBsk4K9JRGkIokqtQltpai0iloifuTRErVRivwA4V0HohAlIa0KEU3UAqkIbcEQ79pgYmoeBr+9tveeqc66Xgzex7lrm54/+2NnvpnvnJk5M+cSJnk9tud8js1ulkDKXAGRKYUUBOoFcyeREaheO+cSiHiyzNJEgTbubS0M0fAjTHKlAJYDYkY8TJboYkF/M0geEhAHdpU5z07Eh6QIbNvGoqW05SGAt0iW3xQQImknpDxGQvyhj4K7G8oWDFnFsUzA4w2skiy3E4l7rBqLJy+BC8T0K+eZ4l3btpHUxdYmoEJFGqHXmPm7uuDJyBHhqCn5iboK97919LUIeHzN95sm7xEC+TqgE5WRkEFi4+na8uI/Jkr4hAQ83sCTLOVrECKh7EQdj6L/cnGj88fxQiquU5XewFYCtk+BY9qQzFznPOPyxCIRk0BlvX8zEf1e29JUCjL/rqbc9Uy0cIpKQMU8m+YH/6ewiboVxPxMdYX7t7f+OY7A+n3nZhoh81MABVO5qVaxJTAMiaV161yfjNUdR6DKG9gP4HtWDdwWeROnU3quL3p985LhUXs3Eais9z9IRO/dFmeSNELEz1WXuXeMJ8BMlT7/CYJYmCT2bVGTLDtlCLP3rC/pVgYjJ1BZH3iICO9MtRfKYFaqgGqeOgclOLm+9Oc15a7f3ESgyhd4D4wHdQgQwbJhhwE84MrA0i+mYlrKSO83EGIcbwvi3aY+9A+PMMlPNzA9TeBsRyTMx7mk+iZXo3OOuhvCJ+DxtdxhcqhNp6ucn2fH3QUpaDjdq8M1LJPpEHjq3mzcmWWLqtMxIPFx6wAU9uwvOPDrv15Dx4AZF5/BK2vL3YfDBKxcWuULMrG8KA0fnh/A/tO90ImAHy7JRmm+IyHhkGRUf9qDS30h9A0zegbjNqU7a8pdT4UJVO31eyGoLKEFAGOd+dflIez+Z3fk+KPpF2Xb8OzSHB1oXOk3YRCh5foQqk/2JNDhxppyd+nICXj9bQQq1LHiWTQNi2emRkS7ghJvne3DPy4Go6rf70zHd+Zm6ECHZU60D6L2ZA/UaSRabB/Ko+/vbsqy2UVXIuHR/78+Ow1rSzPHibd1h8JhdeI/gxg0bxhfPT8TK+akacGrxN15rFMrLEcAeTlV+fyLwXTT9RzPWopB+MU3pkcqya2yauf814ZxviuEy30m5uU5cG9hihaB4xfV7ofLu95ibKRw48b8Jz0NICdVID/Dhs2Ls+AwJndEONIaRMOpRLE/1lN6ljz1gdVM2KdL4Mkl2chLN8L3wB2Zhq6altxbjb04dG5AS1YJEfBLqvIG1gB4U1frAVc6Hr5LPyl1cZXcq8e60NRh5WGCXqAN3pZvCciDuobUpaRyINU2ueEzZDJ+9pcOqF/9xVtpw96Wrwoh/66vBNxT4MDjX86CMYlj8sn2QbxxwkICh0OINlHl/sZcGnZctUJAyTpz7Hh0fgZmZdutqkaV33m8E2euxu5/oimpduJ/N3HzVQjOteLJ14rScGeWgdL8lHBlmsi60B3Cjo+vW6j/I9ZMm1E4QsAbOADgYStOlOQ68PRXsm/041aUb5G1nryABJ+rK3cXj3Sj9YEfMeElqz5YbROi4X/UOgDvKf3OdhSDpdxVu67k8TCBjfs+c5ohI2CVgJK/u8CBVe70pHKhtSuEl492YthS5Rnxklk+UltR8nakFq73Bj4ygGXJkFA6c/Mc+MGiaciw6+VDe28IrxztQu+Q9jvuDdckdfQbA4XqNTtCwONr3sDMtVYJqAnqvjlpWDYrVbusqstKlczRKcyqTWbaUVvhfE7pRQjcd/iwbXZ70WcQKI4FqErmrCwDqQYhN92AK8cec8qKhqEavYP+fvy5uR8a3XJUN9TDr0G24uqy4vabCISrUb2/EkQ18XZExbxKXnUP6K4hE/jkYhAH/X24HkwiZMYYGrv74wiAmarqm45AGMsTOVeQYWDhjBS4p9sxM9NAdqoBdTGrRmAwxOHp6vPuUHg4P3V5EMGQlRYhhnWJtn4jOK+hbEGkbI1raDxvtsxjU6r5wFLHpoBsAlB+JvlUkmjPwMyraivc748VjPW4m1RCJ/RgAgIEvFhd7vrprRAxW0qPN7Cdga0TsDmJqnzgfMGFNR+uWBHSJhDOB1/gdYCemERPkoE60k+ObzeUzYo66cRt6sOfU+cHXgToJ8lYnqgOEb3dB/u6WM6Pr0IxLFb5/JukSa8KAb3pfKKej7QK21tnfP58tLBJmMTR7G+sb14YIrNmql+v1bunQbypusytNSVamgvVbV10pWgLmfS81fkh0aGEb1iIV/oo+MLYOp9IzxKBUbC1vlOZ6Zy2GZK3xGs9EhlX/0uJK4bALptJL73xmPOSjk5SIRQVWH0UaWheRow1IHMl2PiSpgMBlnxICPGOo/PawbGfjDT1I2JJnUAsI5t8gewgaC4Yd4E4l5inMcgAoUcwOiGpyUyRZ+tWuy9bdTSW/H8BfJLNnm1MZf0AAAAASUVORK5CYII="></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAHcElEQVRoQ8VZa2xU1xH+5tzd9RO7xg+CUwzeXQcwSaGCtBLQNqAmbVDSphBsk4K9JRGkIokqtQltpai0iloifuTRErVRivwA4V0HohAlIa0KEU3UAqkIbcEQ79pgYmoeBr+9tveeqc66Xgzex7lrm54/+2NnvpnvnJk5M+cSJnk9tud8js1ulkDKXAGRKYUUBOoFcyeREaheO+cSiHiyzNJEgTbubS0M0fAjTHKlAJYDYkY8TJboYkF/M0geEhAHdpU5z07Eh6QIbNvGoqW05SGAt0iW3xQQImknpDxGQvyhj4K7G8oWDFnFsUzA4w2skiy3E4l7rBqLJy+BC8T0K+eZ4l3btpHUxdYmoEJFGqHXmPm7uuDJyBHhqCn5iboK97919LUIeHzN95sm7xEC+TqgE5WRkEFi4+na8uI/Jkr4hAQ83sCTLOVrECKh7EQdj6L/cnGj88fxQiquU5XewFYCtk+BY9qQzFznPOPyxCIRk0BlvX8zEf1e29JUCjL/rqbc9Uy0cIpKQMU8m+YH/6ewiboVxPxMdYX7t7f+OY7A+n3nZhoh81MABVO5qVaxJTAMiaV161yfjNUdR6DKG9gP4HtWDdwWeROnU3quL3p985LhUXs3Eais9z9IRO/dFmeSNELEz1WXuXeMJ8BMlT7/CYJYmCT2bVGTLDtlCLP3rC/pVgYjJ1BZH3iICO9MtRfKYFaqgGqeOgclOLm+9Oc15a7f3ESgyhd4D4wHdQgQwbJhhwE84MrA0i+mYlrKSO83EGIcbwvi3aY+9A+PMMlPNzA9TeBsRyTMx7mk+iZXo3OOuhvCJ+DxtdxhcqhNp6ucn2fH3QUpaDjdq8M1LJPpEHjq3mzcmWWLqtMxIPFx6wAU9uwvOPDrv15Dx4AZF5/BK2vL3YfDBKxcWuULMrG8KA0fnh/A/tO90ImAHy7JRmm+IyHhkGRUf9qDS30h9A0zegbjNqU7a8pdT4UJVO31eyGoLKEFAGOd+dflIez+Z3fk+KPpF2Xb8OzSHB1oXOk3YRCh5foQqk/2JNDhxppyd+nICXj9bQQq1LHiWTQNi2emRkS7ghJvne3DPy4Go6rf70zHd+Zm6ECHZU60D6L2ZA/UaSRabB/Ko+/vbsqy2UVXIuHR/78+Ow1rSzPHibd1h8JhdeI/gxg0bxhfPT8TK+akacGrxN15rFMrLEcAeTlV+fyLwXTT9RzPWopB+MU3pkcqya2yauf814ZxviuEy30m5uU5cG9hihaB4xfV7ofLu95ibKRw48b8Jz0NICdVID/Dhs2Ls+AwJndEONIaRMOpRLE/1lN6ljz1gdVM2KdL4Mkl2chLN8L3wB2Zhq6altxbjb04dG5AS1YJEfBLqvIG1gB4U1frAVc6Hr5LPyl1cZXcq8e60NRh5WGCXqAN3pZvCciDuobUpaRyINU2ueEzZDJ+9pcOqF/9xVtpw96Wrwoh/66vBNxT4MDjX86CMYlj8sn2QbxxwkICh0OINlHl/sZcGnZctUJAyTpz7Hh0fgZmZdutqkaV33m8E2euxu5/oimpduJ/N3HzVQjOteLJ14rScGeWgdL8lHBlmsi60B3Cjo+vW6j/I9ZMm1E4QsAbOADgYStOlOQ68PRXsm/041aUb5G1nryABJ+rK3cXj3Sj9YEfMeElqz5YbROi4X/UOgDvKf3OdhSDpdxVu67k8TCBjfs+c5ohI2CVgJK/u8CBVe70pHKhtSuEl492YthS5Rnxklk+UltR8nakFq73Bj4ygGXJkFA6c/Mc+MGiaciw6+VDe28IrxztQu+Q9jvuDdckdfQbA4XqNTtCwONr3sDMtVYJqAnqvjlpWDYrVbusqstKlczRKcyqTWbaUVvhfE7pRQjcd/iwbXZ70WcQKI4FqErmrCwDqQYhN92AK8cec8qKhqEavYP+fvy5uR8a3XJUN9TDr0G24uqy4vabCISrUb2/EkQ18XZExbxKXnUP6K4hE/jkYhAH/X24HkwiZMYYGrv74wiAmarqm45AGMsTOVeQYWDhjBS4p9sxM9NAdqoBdTGrRmAwxOHp6vPuUHg4P3V5EMGQlRYhhnWJtn4jOK+hbEGkbI1raDxvtsxjU6r5wFLHpoBsAlB+JvlUkmjPwMyraivc748VjPW4m1RCJ/RgAgIEvFhd7vrprRAxW0qPN7Cdga0TsDmJqnzgfMGFNR+uWBHSJhDOB1/gdYCemERPkoE60k+ObzeUzYo66cRt6sOfU+cHXgToJ8lYnqgOEb3dB/u6WM6Pr0IxLFb5/JukSa8KAb3pfKKej7QK21tnfP58tLBJmMTR7G+sb14YIrNmql+v1bunQbypusytNSVamgvVbV10pWgLmfS81fkh0aGEb1iIV/oo+MLYOp9IzxKBUbC1vlOZ6Zy2GZK3xGs9EhlX/0uJK4bALptJL73xmPOSjk5SIRQVWH0UaWheRow1IHMl2PiSpgMBlnxICPGOo/PawbGfjDT1I2JJnUAsI5t8gewgaC4Yd4E4l5inMcgAoUcwOiGpyUyRZ+tWuy9bdTSW/H8BfJLNnm1MZf0AAAAASUVORK5CYII="></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                    </div>
                    <div class="kl-card-item kl-pb kl-show text-center kl-w50">
                        <span class="badge badge-success">Online</span>
                    </div>
                </div>
            </div> <!-- card end -->

            <div class="card kl-card kl-xl kl-reveal kl-fade kl-overlay kl-show kl-slide-in kl-shine kl-reveal kl-hide kl-spin">

                <div class="kl-card-block kl-lg bg-success kl-shadow-br kl-overlay">
                    <div class="kl-background">
                        <img src="http://www.lorempixel.com/150/150/nature">
                    </div>
                    <div class="kl-card-overlay kl-card-overlay-split-v-4 kl-dark kl-inverse kl-bottom-in">
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                        <div class="kl-card-overlay-item"></div>
                    </div>
                    <div class="kl-card-item kl-pbl kl-show text-white kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">109</span>
                            <span class="kl-title text-white">Following</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pbr kl-show text-muted kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">26k</span>
                            <span class="kl-title text-muted">Followers</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pm kl-show text-white kl-txt-shadow text-center">
                        <h3 class="mb-0">Joe Bloggs</h3>
                        <div class="text-white small">@joebloggs</div>
                    </div>

                    <div class="kl-card-item kl-ptl kl-v kl-card-social kl-slide-in">
                        <a href="#"><img class="kl-b-1 kl-b-white kl-b-circle kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEa0lEQVRYR8VXa2hbZRh+3vckXbu09cKKOJyC29y8IZQmduiw9YesDjbc7HqTIV46GV5okjrdhAZRytY2HbMiE0FhNqdtZAiiGwPpREGb1NUfq0xnHdNZ53602GzrJT3fKydb2zTXs2xgfoXwvM/zfO/75vnOIfzPH8pVv7qvT3P8tbrokiZ2x9i/kU98lVO5cFk2UOHrty0vKnxCkWwmhUeUqHuY2T4vauAfEIaE6BgMrbdnV+moFUNZDZjCtxc7GiHqDYBXWCFVUIrBujK4pff1spFMNRkNNLT/cJ8SDoDxkBXhJIySaWF6a23E6ff5SKXiSGugtm1gI7P0CXhpTuJxRULqcP7EZEOqPUlpwBQnps8B2K5XfK6eSB0pdNg2f7ijLBrPmWTAbLsQwjfi5InmBdLV43n4lbQGYgvncAzmPHMr7SJU6W7X0fnOxNfU+UM7IXjfCk+uGFHy2/lLl+897qucNTnmRxA7fVHB71b/avEGFGhcgwQEmFBQTzF4LRTGwLg15eYLngl4Xd2LDNR3hJ8UyJdpTybyoiJpZfCyeIxBOGePqnXdu8rPmb83Hhy0RyJSQSSrBGo/wHlJnITjuttVuchArT90kASN6QywXd00O2Ur0bSoLtCccTPcGfC4Pkisq20LVwgbwUTDJs4MKm0muizw5vrx+RHUtYdOgnB/2g4QKnS36xufT/jXotBWBdouSj0KDTW97vJjyQYGThPTqnR8BNoY8Di/ihkwLxY+e+fkomxfNGQl0HjvmgnnnkWJJkLVwSAHt20z4uHVvuE8myMyBea0QSdC7h6vszMGeLZz6OZpFR3PuNmEB3S3a9jK9td0DpayUj9mwbbqHtfuKx04cKLEFp29kKmAgK8jhbzpix1ll7OZqG8P7xaSdzPiBB261+W90gFff/50kWMyGzFAL82uOPNRYsvj66oOnF5SHB37hUF3Zeloi+52vb2whPtC56HhtoxdIDlU6NCeT8zz+Jq6jvA7gOzJdhgR2t7jdR5aMNAWOgLGhmyFCuqUTbC121v+c9Lmd4RqSCk90/LN1ShFD/Y2O0/OG6htDzcRiT+VAQO4oCk6Ck1GWKnPEsVjKVq41H01qDjbIQCM6m7nHSCSBQN7TywX28yfDE5JIILvQfhY2PiuAPl/TxuGjVjuFiWPK8ZzLFhtQTgGIaA94HE1X/2+UFbXEfoUQINVohxxs7M2Xhl8reyPJAM1+wZXMhnDYFqSI7mVsv26x9U0B0xKqjp/uBki+6wwXTtGRtgupd2vlk+kNWBm/anigSAJb7l2gQwVSi6SjdYHmlw/xaNSZrUZTDPFBYdFuOqGmDDFWTYFPOX9iXxpLwvzXp+4aPgJ9PL1mZARYno68eRpR5AoVucPbRBD3st0taYxaD5ydbFdtcTP3HIH4oGx17JCR40wXoChHsuSdKMEBCC2roC39Gy27mV9NUskqG/99hbk5a9TgjVEUgJBHhgTouiMCIZ6vWXDZsJlE7Y8AqtEueL+Az80sTB3CtXzAAAAAElFTkSuQmCC"></a>
                        <a href="#"><img class="kl-b-1 kl-b-white kl-b-circle kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAD9klEQVRYR8WXX2hbdRTHv+fcpOscisJG16gvTnQqIig+JFm1vsjmwOGwf7INrTa9lakPGw6GCA2+CKL1XxXS1E3QpUkKwxedzAer7CYTJxPZcMKmzOncFBxWx7o29xy50bZJ1uT+murM04Wc8/1+fuece+69hP/5R436d3TkrF+Xnb/SPa9Baxn9Mf7OY5ONaBkDtLcnAtOha+9XkQ3qcpQIN4ERnDUVOUvgw2DaD1DWyfSeNgHyBfCMp1pDNlR3Any9iSgEAgujEBnIZ/tP1MupC9DWsevWaauYZtAdRsZVQQJcJNBzhdU/DiKRkPk0agJEukfWA5oDcEUj5uU5Ctm7pLlp83xzMi+AZy7Q9xkILNZ8Jl9B+6aucjd8Odw/Xa55CYBXdtdyv/g3Tl4Nr9ChQsZ+uiaAN3CTK0OHjHsuclaZxgA+CdIiAy2q2Fmvakq0rjAa/2gmpqICkdjwVii9aVJ2l+RbLlqRwlj8t5n4cCy5mpS/qZ8vx5vO/HzL+Hii6MXNApRut5Wt3xnfalA7n7FT5WZmAACpbnGy9p4KgOim1AMq+MDk9F6MCK05mIs73nWke7gH4AERt4mZQ34aCh0vZOz7KgAi3ckkwLZf8lzv+G4n03uoBNCVeh2EiuGqqyMQDkwvP5Deem62BeGO1BGycJsfALnytTJ/HCDrtc8yj5/y4sPdww+RUlQJywl41E+jdHLGeifd92EJwHuw/ES/X6jY7TVUSDXpZO0n5vs70jlyD1g/NQIAbXcy8VdKAO09u6+emiyeM0qsAxCOpWKkSJvoKPSFQsZ+tgTQ1rFrhWu5v5gkwnvqMR0X0nhhtP/Y3zMwvJ0IG0W1lYhvMNJRvJzP9j0zU4HmqcniBaPEf4IIc0MY7UwNKePJBeUrDTjZ+POzQxjpTJ4Bc4upyGIBAHokn4m/OwsQ7UztU8baywagdHs+Gz8yB9A9sk2hg5cDQEROH8zZ13k7sQzg7ZCKnAKDTSAW0wKCvuRk7B0Vm7A0zbHUe1Bs/i8BBCgGXFl1YKz/h0sBupKrhPgoA0v8IBqtACledbJ92+ZWepVTtCu1Qwkv+gFAMC2M0nseC4ImrRPghFpL7/x8z5aJmgBIJDh8rHWMwBt9IRYQIMCfzNqWT9tflafN+07Y3rO7+eKku5eg6xbgUTPUM7eEH3RyvZ9UB9V8K77LTgabJmiQQE8tBsIrO7M+XH3y2i2ocgvHRtaSum8AfONCQLxptxRDxcDSgfKeG1egPLD0WdYS6hJCnKD3Alyzct6SsZjSyjyUT8dP+kH7fppVC6zZ9NY1imAYQjcLZAUpNRFoQgnfQ3E4n+096m04P2PjFpgKNRr3F+G5pDBOJtRGAAAAAElFTkSuQmCC"></a>
                        <a href="#"><img class="kl-b-1 kl-b-white kl-b-circle kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEdElEQVRYR8WXXYiUZRTH/+e8szOLzrBKmlF2EUaRy9K+874QYtJ2U5qSEG5dWN1URlIXRkKIYRghRZ9oF3WZpahhEZTRTUNd6T7PvIHuRbhbVGRfhDszC+rs7DnxLLvLOM774Rr0XM57Pn7n63nOEP7nQwv1Pzw87J09e7ZERD19fX2NSqVycSG2MgMMDQ3lJicn7wOwWVXXishtzNwz51RE/vQ8LwLw9fT09JEois5lAUoFcI4bjcY2EXmRmW/OYhSAADgMYI+1djxJJxHA9/3VzHwIwJ0ZHXeKXQKw21r71izUFWZiAYIg2CgiR5l50QKdz6sR0fFisbi1W590BZh1/hkz567V+Zy+qp4gos3W2ql2m1cAuLQDGPkvIu+EV9UD1Wr1uViA2YYz11Dz1ISp6oZqtfrVnOBlGQiCYDuA97pZERGXukEiupuIdonITQDOMbOb/6KIrGDmgy5KAJuI6OUYmrFSqXRHpVJpue/zAC76Wq32Y9yoich4FEW3OqUgCBaVSiVpb6r+/v786Oho030vl8sPE9GRuHSo6qPVavXjywDCMHxAVb+IUxKRf6IoWpaaYwBhGG5R1WMJtipRFN3bCfC+qm6LUyKi3caYV7MAuMz6vv8dM6+NkZdms7ns9OnT5+dLEATBGQD9CdTXR1H0d0YAV4aniOiDhIA2GmO+nAFwD8vY2NiF9ru9Q1GttZzV+Wwf3E9E893eqUtEzxtj3p4BGBwcXOJ53vkUB0ustbWsEEEQDAM4miC/z1q7awbA9/3lzPxXivFN1trYJu3U9X1/LzO/lFDSN6MoemEGYGhoqLfRaFxIAiAiUywW12V594Mg6AMwCsDdFXHHvZR755vQ9/0/mHlFjHRTRJiITjHzDmPMCADtIktBELhd4V1mLqcE9Lgx5uA8QBiGJ1R1fTclVf2BiJ4B8CGAlQB+I6LtxpjP5+TDMHxienr6NWa+LkufENGAMeZMO8AOVXXvdtdDRN+q6rMAXgHQrNVqjxUKhZ5cLtfXarVqvb29vQCyjuk5a60LRNtLcCMz/wogdtxExDnfn8/nL7VarcUAVqnqYmYuGWM+8X2/mTDK7YG9Ya3d6X7ofIw+ArA1LYVu/8vn8+HU1NQtABYx81JjzFHf9y+mAYhIi5lXWWt/6QawarZ7C0kQIvJ7Lpe7q9VqrSSiG5i5MDEx8WmpVJpMW2KI6B1jzI45+1csJOVyeScRvZ6Shb1E5KbgsKruY+Z9IrJGVVcT0dMJsz+ez+fLJ0+erMcCuB4Iw/CYqj6UAjEBwN2ergxjIrKSmV0jxh2XnXUjIyPftwt03QndxVSv148T0Ya0fsj4fRLAg9babzrlk7biHjeWRORGb8HHLTK5XG5LZ+RJJbjMWblcXk9E+wHMbENZj+t2z/MOeJ63p73mmTPQLujWtXq9/oiqPsnM93SOb4dR95fskIgciKLo5zTg1L9mnQYGBgaWFgqFNQBuV9XlIpJn5joR/QQgMsa4R6jbO9GV5aoB0iK62u//AuhE0jAWsl0eAAAAAElFTkSuQmCC"></a>
                    </div>
                    <div class="kl-card-item kl-pb kl-show text-center kl-w50">
                        <span class="badge badge-success">Online</span>
                    </div>

                    <a href="#" class="kl-card-avatar kl-md kl-pm kl-slow kl-hide"><img class="kl-b-success kl-b-circle kl-b-4 kl-slow kl-shadow-br kl-spin" src="http://lorempixel.com/100/100/people"></a>

                </div>
            </div> <!-- card end -->

            <div class="card kl-card kl-xl kl-reveal kl-fade kl-show kl-slide-in kl-shine kl-reveal kl-hide kl-spin">

                <div class="kl-card-block kl-lg bg-success kl-shadow-br kl-overlay">
                    <div class="kl-background">
                        <img src="http://www.lorempixel.com/150/150/nature">
                    </div>
                    <div class="kl-card-item kl-pbl kl-show text-primary kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">109</span>
                            <span class="kl-title text-primary">Following</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pbr kl-show text-primary kl-txt-shadow">
                        <div class="kl-figure-block">
                            <span class="kl-figure">26k</span>
                            <span class="kl-title text-primary">Followers</span>
                        </div>
                    </div>
                    <div class="kl-card-item kl-pm kl-show text-white kl-txt-shadow text-center">
                        <h3 class="mb-0">Joe Bloggs</h3>
                        <div class="text-white small">@joebloggs</div>
                    </div>

                    <div class="kl-card-item kl-ptl kl-v kl-card-social kl-slide-in">
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,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"></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAHcElEQVRoQ8VZa2xU1xH+5tzd9RO7xg+CUwzeXQcwSaGCtBLQNqAmbVDSphBsk4K9JRGkIokqtQltpai0iloifuTRErVRivwA4V0HohAlIa0KEU3UAqkIbcEQ79pgYmoeBr+9tveeqc66Xgzex7lrm54/+2NnvpnvnJk5M+cSJnk9tud8js1ulkDKXAGRKYUUBOoFcyeREaheO+cSiHiyzNJEgTbubS0M0fAjTHKlAJYDYkY8TJboYkF/M0geEhAHdpU5z07Eh6QIbNvGoqW05SGAt0iW3xQQImknpDxGQvyhj4K7G8oWDFnFsUzA4w2skiy3E4l7rBqLJy+BC8T0K+eZ4l3btpHUxdYmoEJFGqHXmPm7uuDJyBHhqCn5iboK97919LUIeHzN95sm7xEC+TqgE5WRkEFi4+na8uI/Jkr4hAQ83sCTLOVrECKh7EQdj6L/cnGj88fxQiquU5XewFYCtk+BY9qQzFznPOPyxCIRk0BlvX8zEf1e29JUCjL/rqbc9Uy0cIpKQMU8m+YH/6ewiboVxPxMdYX7t7f+OY7A+n3nZhoh81MABVO5qVaxJTAMiaV161yfjNUdR6DKG9gP4HtWDdwWeROnU3quL3p985LhUXs3Eais9z9IRO/dFmeSNELEz1WXuXeMJ8BMlT7/CYJYmCT2bVGTLDtlCLP3rC/pVgYjJ1BZH3iICO9MtRfKYFaqgGqeOgclOLm+9Oc15a7f3ESgyhd4D4wHdQgQwbJhhwE84MrA0i+mYlrKSO83EGIcbwvi3aY+9A+PMMlPNzA9TeBsRyTMx7mk+iZXo3OOuhvCJ+DxtdxhcqhNp6ucn2fH3QUpaDjdq8M1LJPpEHjq3mzcmWWLqtMxIPFx6wAU9uwvOPDrv15Dx4AZF5/BK2vL3YfDBKxcWuULMrG8KA0fnh/A/tO90ImAHy7JRmm+IyHhkGRUf9qDS30h9A0zegbjNqU7a8pdT4UJVO31eyGoLKEFAGOd+dflIez+Z3fk+KPpF2Xb8OzSHB1oXOk3YRCh5foQqk/2JNDhxppyd+nICXj9bQQq1LHiWTQNi2emRkS7ghJvne3DPy4Go6rf70zHd+Zm6ECHZU60D6L2ZA/UaSRabB/Ko+/vbsqy2UVXIuHR/78+Ow1rSzPHibd1h8JhdeI/gxg0bxhfPT8TK+akacGrxN15rFMrLEcAeTlV+fyLwXTT9RzPWopB+MU3pkcqya2yauf814ZxviuEy30m5uU5cG9hihaB4xfV7ofLu95ibKRw48b8Jz0NICdVID/Dhs2Ls+AwJndEONIaRMOpRLE/1lN6ljz1gdVM2KdL4Mkl2chLN8L3wB2Zhq6altxbjb04dG5AS1YJEfBLqvIG1gB4U1frAVc6Hr5LPyl1cZXcq8e60NRh5WGCXqAN3pZvCciDuobUpaRyINU2ueEzZDJ+9pcOqF/9xVtpw96Wrwoh/66vBNxT4MDjX86CMYlj8sn2QbxxwkICh0OINlHl/sZcGnZctUJAyTpz7Hh0fgZmZdutqkaV33m8E2euxu5/oimpduJ/N3HzVQjOteLJ14rScGeWgdL8lHBlmsi60B3Cjo+vW6j/I9ZMm1E4QsAbOADgYStOlOQ68PRXsm/041aUb5G1nryABJ+rK3cXj3Sj9YEfMeElqz5YbROi4X/UOgDvKf3OdhSDpdxVu67k8TCBjfs+c5ohI2CVgJK/u8CBVe70pHKhtSuEl492YthS5Rnxklk+UltR8nakFq73Bj4ygGXJkFA6c/Mc+MGiaciw6+VDe28IrxztQu+Q9jvuDdckdfQbA4XqNTtCwONr3sDMtVYJqAnqvjlpWDYrVbusqstKlczRKcyqTWbaUVvhfE7pRQjcd/iwbXZ70WcQKI4FqErmrCwDqQYhN92AK8cec8qKhqEavYP+fvy5uR8a3XJUN9TDr0G24uqy4vabCISrUb2/EkQ18XZExbxKXnUP6K4hE/jkYhAH/X24HkwiZMYYGrv74wiAmarqm45AGMsTOVeQYWDhjBS4p9sxM9NAdqoBdTGrRmAwxOHp6vPuUHg4P3V5EMGQlRYhhnWJtn4jOK+hbEGkbI1raDxvtsxjU6r5wFLHpoBsAlB+JvlUkmjPwMyraivc748VjPW4m1RCJ/RgAgIEvFhd7vrprRAxW0qPN7Cdga0TsDmJqnzgfMGFNR+uWBHSJhDOB1/gdYCemERPkoE60k+ObzeUzYo66cRt6sOfU+cHXgToJ8lYnqgOEb3dB/u6WM6Pr0IxLFb5/JukSa8KAb3pfKKej7QK21tnfP58tLBJmMTR7G+sb14YIrNmql+v1bunQbypusytNSVamgvVbV10pWgLmfS81fkh0aGEb1iIV/oo+MLYOp9IzxKBUbC1vlOZ6Zy2GZK3xGs9EhlX/0uJK4bALptJL73xmPOSjk5SIRQVWH0UaWheRow1IHMl2PiSpgMBlnxICPGOo/PawbGfjDT1I2JJnUAsI5t8gewgaC4Yd4E4l5inMcgAoUcwOiGpyUyRZ+tWuy9bdTSW/H8BfJLNnm1MZf0AAAAASUVORK5CYII="></a>
                        <a href="#"><img class="kl-b-2 kl-shine kl-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAHcElEQVRoQ8VZa2xU1xH+5tzd9RO7xg+CUwzeXQcwSaGCtBLQNqAmbVDSphBsk4K9JRGkIokqtQltpai0iloifuTRErVRivwA4V0HohAlIa0KEU3UAqkIbcEQ79pgYmoeBr+9tveeqc66Xgzex7lrm54/+2NnvpnvnJk5M+cSJnk9tud8js1ulkDKXAGRKYUUBOoFcyeREaheO+cSiHiyzNJEgTbubS0M0fAjTHKlAJYDYkY8TJboYkF/M0geEhAHdpU5z07Eh6QIbNvGoqW05SGAt0iW3xQQImknpDxGQvyhj4K7G8oWDFnFsUzA4w2skiy3E4l7rBqLJy+BC8T0K+eZ4l3btpHUxdYmoEJFGqHXmPm7uuDJyBHhqCn5iboK97919LUIeHzN95sm7xEC+TqgE5WRkEFi4+na8uI/Jkr4hAQ83sCTLOVrECKh7EQdj6L/cnGj88fxQiquU5XewFYCtk+BY9qQzFznPOPyxCIRk0BlvX8zEf1e29JUCjL/rqbc9Uy0cIpKQMU8m+YH/6ewiboVxPxMdYX7t7f+OY7A+n3nZhoh81MABVO5qVaxJTAMiaV161yfjNUdR6DKG9gP4HtWDdwWeROnU3quL3p985LhUXs3Eais9z9IRO/dFmeSNELEz1WXuXeMJ8BMlT7/CYJYmCT2bVGTLDtlCLP3rC/pVgYjJ1BZH3iICO9MtRfKYFaqgGqeOgclOLm+9Oc15a7f3ESgyhd4D4wHdQgQwbJhhwE84MrA0i+mYlrKSO83EGIcbwvi3aY+9A+PMMlPNzA9TeBsRyTMx7mk+iZXo3OOuhvCJ+DxtdxhcqhNp6ucn2fH3QUpaDjdq8M1LJPpEHjq3mzcmWWLqtMxIPFx6wAU9uwvOPDrv15Dx4AZF5/BK2vL3YfDBKxcWuULMrG8KA0fnh/A/tO90ImAHy7JRmm+IyHhkGRUf9qDS30h9A0zegbjNqU7a8pdT4UJVO31eyGoLKEFAGOd+dflIez+Z3fk+KPpF2Xb8OzSHB1oXOk3YRCh5foQqk/2JNDhxppyd+nICXj9bQQq1LHiWTQNi2emRkS7ghJvne3DPy4Go6rf70zHd+Zm6ECHZU60D6L2ZA/UaSRabB/Ko+/vbsqy2UVXIuHR/78+Ow1rSzPHibd1h8JhdeI/gxg0bxhfPT8TK+akacGrxN15rFMrLEcAeTlV+fyLwXTT9RzPWopB+MU3pkcqya2yauf814ZxviuEy30m5uU5cG9hihaB4xfV7ofLu95ibKRw48b8Jz0NICdVID/Dhs2Ls+AwJndEONIaRMOpRLE/1lN6ljz1gdVM2KdL4Mkl2chLN8L3wB2Zhq6altxbjb04dG5AS1YJEfBLqvIG1gB4U1frAVc6Hr5LPyl1cZXcq8e60NRh5WGCXqAN3pZvCciDuobUpaRyINU2ueEzZDJ+9pcOqF/9xVtpw96Wrwoh/66vBNxT4MDjX86CMYlj8sn2QbxxwkICh0OINlHl/sZcGnZctUJAyTpz7Hh0fgZmZdutqkaV33m8E2euxu5/oimpduJ/N3HzVQjOteLJ14rScGeWgdL8lHBlmsi60B3Cjo+vW6j/I9ZMm1E4QsAbOADgYStOlOQ68PRXsm/041aUb5G1nryABJ+rK3cXj3Sj9YEfMeElqz5YbROi4X/UOgDvKf3OdhSDpdxVu67k8TCBjfs+c5ohI2CVgJK/u8CBVe70pHKhtSuEl492YthS5Rnxklk+UltR8nakFq73Bj4ygGXJkFA6c/Mc+MGiaciw6+VDe28IrxztQu+Q9jvuDdckdfQbA4XqNTtCwONr3sDMtVYJqAnqvjlpWDYrVbusqstKlczRKcyqTWbaUVvhfE7pRQjcd/iwbXZ70WcQKI4FqErmrCwDqQYhN92AK8cec8qKhqEavYP+fvy5uR8a3XJUN9TDr0G24uqy4vabCISrUb2/EkQ18XZExbxKXnUP6K4hE/jkYhAH/X24HkwiZMYYGrv74wiAmarqm45AGMsTOVeQYWDhjBS4p9sxM9NAdqoBdTGrRmAwxOHp6vPuUHg4P3V5EMGQlRYhhnWJtn4jOK+hbEGkbI1raDxvtsxjU6r5wFLHpoBsAlB+JvlUkmjPwMyraivc748VjPW4m1RCJ/RgAgIEvFhd7vrprRAxW0qPN7Cdga0TsDmJqnzgfMGFNR+uWBHSJhDOB1/gdYCemERPkoE60k+ObzeUzYo66cRt6sOfU+cHXgToJ8lYnqgOEb3dB/u6WM6Pr0IxLFb5/JukSa8KAb3pfKKej7QK21tnfP58tLBJmMTR7G+sb14YIrNmql+v1bunQbypusytNSVamgvVbV10pWgLmfS81fkh0aGEb1iIV/oo+MLYOp9IzxKBUbC1vlOZ6Zy2GZK3xGs9EhlX/0uJK4bALptJL73xmPOSjk5SIRQVWH0UaWheRow1IHMl2PiSpgMBlnxICPGOo/PawbGfjDT1I2JJnUAsI5t8gewgaC4Yd4E4l5inMcgAoUcwOiGpyUyRZ+tWuy9bdTSW/H8BfJLNnm1MZf0AAAAASUVORK5CYII="></a>
                    </div>
                    <div class="kl-card-item kl-pb kl-show text-center kl-w50">
                        <span class="badge badge-success">Online</span>
                    </div>

                    <a href="#" class="kl-card-avatar kl-md kl-pm kl-slow kl-hide"><img class="kl-b-success kl-b-circle kl-b-4 kl-slow kl-shadow-br kl-spin" src="http://lorempixel.com/100/100/people"></a>

                </div>
            </div> <!-- card end -->

        </div><!-- column end -->

        <div class="col-1"></div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">

            <div class="card kl-card kl-xl kl-reveal kl-fade kl-show kl-shine kl-spin">
                <div class="kl-card-block kl-sm bg-white">
                    <div class="kl-card-item kl-pm kl-show kl-txt-shadow text-center">
                        <h3 class="mb-0">Joe Bloggs</h3>
                    </div>
                    <a href="#" class="kl-card-avatar kl-sm kl-pl ml-2"><img class="kl-b-danger kl-b-circle kl-b-3 kl-spin kl-fast kl-shine" src="http://lorempixel.com/100/100/people"></a>
                    <div class="kl-card-item kl-ptr kl-show mr-1">
                        <span class="badge badge-danger">Offline</span>
                    </div>
                </div>
            </div> <!-- card end -->

        </div><!-- column end -->

        <div class="col-1"></div>

    </div>

</article>


<style>


pre {
    color: red;
}

.kl-card {
    margin-bottom: 15px;
}

.kl-card > .kl-card-block {
    height: 3px;
}
.kl-card > .kl-card-block.kl-xs {
    height: 15px;
}
.kl-card > .kl-card-block.kl-sm {
    height: 50px;
}
.kl-card > .kl-card-block.kl-md {
    height: 100px;
}
.kl-card > .kl-card-block.kl-lg {
    height: 200px;
}
.kl-card > .kl-card-block.kl-xl {
    height: 250px;
}
.kl-card > .kl-card-block.kl-xxl {
    height: 300px;
}
.kl-card > .kl-card-block {
    background: #fff;
}
.kl-card .kl-card-block, .kl-card .card-block {
    position:relative;
}

.kl-card > .kl-card-block > .kl-card-item, .kl-card > .card-block > .kl-card-item {
    position: absolute;
    display:block;
    background: none;
    padding: 3px;
    margin: auto auto;
}

.kl-card-block.kl-slide-out, .kl-card-block.kl-slide-in, .kl-card-block.kl-overlay { /* -- Hide overflow if we're running sliders -- */
    overflow: hidden;
}

.kl-card-block > .kl-background {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
}
.kl-card-block > .kl-background > img {
    width: 100%;
    height: 100%;
}
.kl-card-block > .kl-card-item {
    z-index: 2;
}

.kl-card-avatar {
    background: none;
    padding: 0;
    margin: 0;
}

.kl-card-block > .kl-card-avatar {
    z-index: 4;
    position: absolute;
    display:block;
}

.kl-card-avatar img {
    width: 100px;
}
.kl-card-avatar.kl-xs, .kl-card-avatar.kl-xs > img {
    width: 32px;
}
.kl-card-avatar.kl-sm, .kl-card-avatar.kl-sm > img {
    width: 48px;
}
.kl-card-avatar.kl-md, .kl-card-avatar.kl-md > img {
    width: 64px;
}
.kl-card-avatar.kl-lg, .kl-card-avatar.kl-lg > img {
    width: 86px;
}
.kl-card-avatar.kl-xl, .kl-card-avatar.kl-xl > img {
    width: 100px;
}

.kl-pt {
    top: 0;
    left: 0;
    right: 0;
    margin:auto;
}
.kl-ptl {
    top: 0;
    left: 0;
    margin:auto;
}
.kl-ptr {
    top: 0;
    right: 0;
    margin:auto;
    text-align:right;
}
.kl-pb {
    bottom: 0;
    left: 0;
    right: 0;
    margin:auto;
}
.kl-pbl {
    bottom: 0;
    left: 0;
    margin:auto;
}
.kl-pbr {
    bottom: 0;
    right: 0;
    margin:auto;
    text-align:right;
}
.kl-pl {
    left: 0;
    top: 50%;
    transform: translate(0,-50%);
}
.kl-pr {
    right: 0;
    top: 50%;
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    -moz-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    transform: translate(0,-50%);
    text-align:right;
}
.kl-pm {
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.kl-plo, .kl-xl.kl-plo {left: -50px;}
.kl-lg.kl-plo {left: -43px;}
.kl-md.kl-plo {left: -32px;}
.kl-sm.kl-plo {left: -24px;}
.kl-xs.kl-plo {left: -16px;}
.kl-pro, .kl-xl.kl-pro {right: -50px;}
.kl-lg.kl-pro {right: -43px;}
.kl-md.kl-pro {right: -32px;}
.kl-sm.kl-pro {right: -24px;}
.kl-xs.kl-pro {right: -16px;}
.kl-pto, .kl-xl.kl-pto {top: -50px;}
.kl-lg.kl-pto {top: -43px;}
.kl-md.kl-pto {top: -32px;}
.kl-sm.kl-pto {top: -24px;}
.kl-xs.kl-pto {top: -16px;}
.kl-pbo, .kl-xl.kl-pbo {bottom: -50px;}
.kl-lg.kl-pbo {bottom: -43px;}
.kl-md.kl-pbo {bottom: -32px;}
.kl-sm.kl-pbo {bottom: -24px;}
.kl-xs.kl-pbo {bottom: -16px;}

.kl-card-social {
    background: none;
    padding: 3px;
    margin: auto auto;
}
.kl-card-social a {
    display: inline-block;
    margin: 0 -1px;
}
.kl-card-social a, .kl-card-social img {
    width: 28px;
}

.kl-card-social.kl-sm a, .kl-card-social.kl-sm img {
    width: 24px;
}
.kl-card-social.kl-lg a, .kl-card-social.kl-lg img {
    width: 32px;
}

.kl-card-social.kl-pt {
    text-align:center;
}
.kl-card-social.kl-pb {
    text-align:center;
}
.kl-card-social.kl-v {
    width: 28px;
}
.kl-card-social.kl-sm.kl-v {
    width: 24px;
}
.kl-card-social.kl-lg.kl-v {
    width: 32px;
}
.kl-card-social.kl-v a {
    margin-bottom: 2px;
}
.kl-card-item.kl-w25 {
    width: 25%;
}
.kl-card-item.kl-w33 {
    width: 33%;
}
.kl-card-item.kl-w50 {
    width: 50%;
}
.kl-card-item.kl-w66 {
    width: 66%;
}
.kl-card-item.kl-w75 {
    width: 75%;
}
.kl-card-social.kl-w25 a, .kl-card-social.kl-w33 a, .kl-card-social.kl-w50 a, .kl-card-social.kl-w66 a, .kl-card-social.kl-w75 a, .kl-card-social.kl-h25 a, .kl-card-social.kl-h33 a, .kl-card-social.kl-h50 a, .kl-card-social.kl-h66 a, .kl-card-social.kl-h75 a {
    margin-bottom: 2px;
}

.kl-card-item.kl-h25 {
    height: 25%;
}
.kl-card-item.kl-h33 {
    height: 33%;
}
.kl-card-item.kl-h50 {
    height: 50%;
}
.kl-card-item.kl-h66 {
    height: 66%;
}
.kl-card-item.kl-h75 {
    height: 75%;
}

/** -- OVERLAY STYLES -- **/
.kl-card-overlay {
    position: absolute;
    background: transparent;
    color: #fff;
    width: 100%;
    height: 100%;
}
.kl-card-block > .kl-card-overlay {
    z-index: 3;
}

.kl-card .card-block > .kl-card-overlay { /** -- deal with bootstrap .card-block padding -- **/
    top: 0;
    left: 0;
}

.kl-card.kl-overlay > .kl-card-top.kl-overlay {
    overflow: hidden;
}
.kl-card.kl-overlay > .card-block.kl-overlay {
    overflow: hidden;
}

.kl-card-overlay-item {
    margin:0;
    position:relative;
    padding: 5px;
}
.kl-card-overlay > .kl-card-overlay-item {
    background: rgb(0,0,0);
    background: rgba(0,0,0,0.5);
}
.kl-card-overlay.kl-lite > .kl-card-overlay-item {
    background: rgb(0,0,0);
    background: rgba(0,0,0,0.25);
}
.kl-card-overlay.kl-dark > .kl-card-overlay-item {
    background: rgb(0,0,0);
    background: rgba(0,0,0,0.75);
}

/** -- Single Block -- **/
.kl-card-overlay-block, .kl-card-overlay-item {transition: all 0.5s ease-in-out;}
.kl-card-overlay-block .kl-card-overlay-item {width: 100%;height: 100%;}
.kl-card-overlay-block.kl-top-in {top: -100%;}
.kl-card-overlay-block.kl-inverse.kl-top-in {top: 0;}
.kl-card-overlay-block.kl-right-in {right: -100%;}
.kl-card-overlay-block.kl-inverse.kl-right-in {right: 0;}
.kl-card-overlay-block.kl-bottom-in {bottom: -100%;}
.kl-card-overlay-block.kl-inverse.kl-bottom-in {bottom: 0;}
.kl-card-overlay-block.kl-left-in {left: -100%;}
.kl-card-overlay-block.kl-inverse.kl-left-in {left: 0;}
.kl-overlay:hover .kl-card-overlay-block.kl-top-in, .kl-overlay.hover .kl-card-overlay-block.kl-top-in {top: 0;}
.kl-overlay:hover .kl-card-overlay-block.kl-inverse.kl-top-in:not(.kl-static), .kl-overlay.hover .kl-card-overlay-block.kl-inverse.kl-top-in:not(.kl-static) {top: -100%;}
.kl-overlay:hover .kl-card-overlay-block.kl-right-in, .kl-overlay.hover .kl-card-overlay-block.kl-right-in {right: 0;}
.kl-overlay:hover .kl-card-overlay-block.kl-inverse.kl-right-in:not(.kl-static), .kl-overlay.hover .kl-card-overlay-block.kl-inverse.kl-right-in:not(.kl-static) {right: -100%;}
.kl-overlay:hover .kl-card-overlay-block.kl-bottom-in, .kl-overlay.hover .kl-card-overlay-block.kl-bottom-in {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-block.kl-inverse.kl-bottom-in:not(.kl-static), .kl-overlay.hover .kl-card-overlay-block.kl-inverse.kl-bottom-in:not(.kl-static) {bottom: -100%;}
.kl-overlay:hover .kl-card-overlay-block.kl-left-in, .kl-overlay.hover .kl-card-overlay-block.kl-left-in {left: 0;}
.kl-overlay:hover .kl-card-overlay-block.kl-inverse.kl-left-in:not(.kl-static), .kl-overlay.hover .kl-card-overlay-block.kl-inverse.kl-left-in:not(.kl-static) {left: -100%;}

/** -- Horizontal Split 2 -- **/
.kl-card-overlay-split-h .kl-card-overlay-item {width: 100%;height: 50%;position:absolute;}
.kl-card-overlay-split-h > .kl-card-overlay-item:nth-child(1) {top: -50%;}
.kl-card-overlay-split-h > .kl-card-overlay-item:nth-child(2) {bottom: -50%;}
.kl-card-overlay-split-h.kl-inverse > .kl-card-overlay-item:nth-child(1) {top: 0;}
.kl-card-overlay-split-h.kl-inverse > .kl-card-overlay-item:nth-child(2) {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-h .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-h .kl-card-overlay-item:nth-child(1) {top: 0;}
.kl-overlay:hover .kl-card-overlay-split-h .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-h .kl-card-overlay-item:nth-child(2) {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-h.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-h.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1) {top: -50%;}
.kl-overlay:hover .kl-card-overlay-split-h.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-h.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2) {bottom: -50%;}

/** -- Horizontal Split 3 -- **/
.kl-card-overlay-split-h-3 .kl-card-overlay-item {width: 100%;height: 33.333333%;position:absolute;}
.kl-card-overlay-split-h-3 > .kl-card-overlay-item:nth-child(1) {top: 0;transition: all 0.3s ease-in-out;}
.kl-card-overlay-split-h-3 > .kl-card-overlay-item:nth-child(2) {top: 33.333333%;transition: all 0.5s ease-in-out;}
.kl-card-overlay-split-h-3 > .kl-card-overlay-item:nth-child(3) {top: 66.666666%;transition: all 0.7s ease-in-out;}
.kl-card-overlay-split-h-3.kl-left-in > .kl-card-overlay-item {left: -100%;}
.kl-card-overlay-split-h-3.kl-right-in > .kl-card-overlay-item{right: -100%;}
.kl-card-overlay-split-h-3.kl-inverse.kl-left-in > .kl-card-overlay-item {left: 0;}
.kl-card-overlay-split-h-3.kl-inverse.kl-right-in > .kl-card-overlay-item{right: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-3.kl-left-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-3.kl-left-in .kl-card-overlay-item {left: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-3.kl-right-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-3.kl-right-in .kl-card-overlay-item {right: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-3.kl-inverse.kl-left-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-3.kl-inverse.kl-left-in:not(.kl-static) .kl-card-overlay-item {left: -100%;}
.kl-overlay:hover .kl-card-overlay-split-h-3.kl-inverse.kl-right-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-3.kl-inverse.kl-right-in:not(.kl-static) .kl-card-overlay-item {right: -100%;}

/** -- Horizontal Split 4 -- **/
.kl-card-overlay-split-h-4 .kl-card-overlay-item {width: 100%;height: 25%;position:absolute;}
.kl-card-overlay-split-h-4 > .kl-card-overlay-item:nth-child(1) {top: 0;transition: all 0.3s ease-in-out;}
.kl-card-overlay-split-h-4 > .kl-card-overlay-item:nth-child(2) {top: 25%;transition: all 0.5s ease-in-out;}
.kl-card-overlay-split-h-4 > .kl-card-overlay-item:nth-child(3) {top: 50%;transition: all 0.7s ease-in-out;}
.kl-card-overlay-split-h-4 > .kl-card-overlay-item:nth-child(4) {top: 75%;transition: all 0.9s ease-in-out;}
.kl-card-overlay-split-h-4.kl-left-in > .kl-card-overlay-item {left: -100%;}
.kl-card-overlay-split-h-4.kl-right-in > .kl-card-overlay-item {right: -100%;}
.kl-card-overlay-split-h-4.kl-inverse.kl-left-in > .kl-card-overlay-item {left: 0;}
.kl-card-overlay-split-h-4.kl-inverse.kl-right-in > .kl-card-overlay-item {right: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-4.kl-left-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-4.kl-left-in .kl-card-overlay-item {left: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-4.kl-right-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-4.kl-right-in .kl-card-overlay-item {right: 0;}
.kl-overlay:hover .kl-card-overlay-split-h-4.kl-inverse.kl-left-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-4.kl-inverse.kl-left-in:not(.kl-static) .kl-card-overlay-item {left: -100%;}
.kl-overlay:hover .kl-card-overlay-split-h-4.kl-inverse.kl-right-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-h-4.kl-inverse.kl-right-in:not(.kl-static) .kl-card-overlay-item {right: -100%;}

/** -- Vertical Split 2 -- **/
.kl-card-overlay-split-v .kl-card-overlay-item {width: 50%;height: 100%;position:absolute;}
.kl-card-overlay-split-v > .kl-card-overlay-item:nth-child(1) {left: -50%;}
.kl-card-overlay-split-v > .kl-card-overlay-item:nth-child(2) {right: -50%;}
.kl-card-overlay-split-v.kl-inverse > .kl-card-overlay-item:nth-child(1) {left: 0;}
.kl-card-overlay-split-v.kl-inverse > .kl-card-overlay-item:nth-child(2) {right: 0;}
.kl-overlay:hover .kl-card-overlay-split-v .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-v .kl-card-overlay-item:nth-child(1) {left: 0;}
.kl-overlay:hover .kl-card-overlay-split-v .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-v .kl-card-overlay-item:nth-child(2) {right: 0;}
.kl-overlay:hover .kl-card-overlay-split-v.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-v.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1) {left: -50%;}
.kl-overlay:hover .kl-card-overlay-split-v.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-v.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2) {right: -50%;}

/** -- Vertical Split 3 -- **/
.kl-card-overlay-split-v-3 .kl-card-overlay-item {width: 33.333333%;height: 100%;position:absolute;}
.kl-card-overlay-split-v-3 > .kl-card-overlay-item:nth-child(1) {left: 0;transition: all 0.3s ease-in-out;}
.kl-card-overlay-split-v-3 > .kl-card-overlay-item:nth-child(2) {left: 33.333333%;transition: all 0.5s ease-in-out;}
.kl-card-overlay-split-v-3 > .kl-card-overlay-item:nth-child(3) {left: 66.666666%;transition: all 0.7s ease-in-out;}
.kl-card-overlay-split-v-3.kl-top-in > .kl-card-overlay-item {top: -100%;}
.kl-card-overlay-split-v-3.kl-bottom-in > .kl-card-overlay-item {bottom: -100%;}
.kl-card-overlay-split-v-3.kl-inverse.kl-top-in > .kl-card-overlay-item {top: 0;}
.kl-card-overlay-split-v-3.kl-inverse.kl-bottom-in > .kl-card-overlay-item {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-3.kl-top-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-3.kl-top-in .kl-card-overlay-item {top: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-3.kl-bottom-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-3.kl-bottom-in .kl-card-overlay-item {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-3.kl-inverse.kl-top-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-3.kl-inverse.kl-top-in:not(.kl-static) .kl-card-overlay-item {top: -100%;}
.kl-overlay:hover .kl-card-overlay-split-v-3.kl-inverse.kl-bottom-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-3.kl-inverse.kl-bottom-in:not(.kl-static) .kl-card-overlay-item {bottom: -100%;}

/** -- Vertical Split 4 -- **/
.kl-card-overlay-split-v-4 .kl-card-overlay-item {width: 25%;height: 100%;position:absolute;}
.kl-card-overlay-split-v-4 > .kl-card-overlay-item:nth-child(1) {left: 0;transition: all 0.3s ease-in-out;}
.kl-card-overlay-split-v-4 > .kl-card-overlay-item:nth-child(2) {left: 25%;transition: all 0.5s ease-in-out;}
.kl-card-overlay-split-v-4 > .kl-card-overlay-item:nth-child(3) {left: 50%;transition: all 0.7s ease-in-out;}
.kl-card-overlay-split-v-4 > .kl-card-overlay-item:nth-child(4) {left: 75%;transition: all 0.9s ease-in-out;}
.kl-card-overlay-split-v-4.kl-top-in > .kl-card-overlay-item {top: -100%;}
.kl-card-overlay-split-v-4.kl-bottom-in > .kl-card-overlay-item {bottom: -100%;}
.kl-card-overlay-split-v-4.kl-inverse.kl-top-in > .kl-card-overlay-item {top: 0;}
.kl-card-overlay-split-v-4.kl-inverse.kl-bottom-in > .kl-card-overlay-item {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-4.kl-top-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-4.kl-top-in .kl-card-overlay-item {top: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-4.kl-bottom-in .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-4.kl-bottom-in .kl-card-overlay-item {bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-v-4.kl-inverse.kl-top-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-4.kl-inverse.kl-top-in:not(.kl-static) .kl-card-overlay-item {top: -100%;}
.kl-overlay:hover .kl-card-overlay-split-v-4.kl-inverse.kl-bottom-in:not(.kl-static) .kl-card-overlay-item, .kl-overlay.hover .kl-card-overlay-split-v-4.kl-inverse.kl-bottom-in:not(.kl-static) .kl-card-overlay-item {bottom: -100%;}

/** -- 4 Quarter Split -- **/
.kl-card-overlay-split-q .kl-card-overlay-item {width: 50%;height: 50%;position:absolute;}
.kl-card-overlay-split-q > .kl-card-overlay-item:nth-child(1) {top: -50%;left: -50%;}
.kl-card-overlay-split-q > .kl-card-overlay-item:nth-child(2) {top: -50%;right: -50%;}
.kl-card-overlay-split-q > .kl-card-overlay-item:nth-child(3) {right: -50%;bottom: -50%;}
.kl-card-overlay-split-q > .kl-card-overlay-item:nth-child(4) {bottom: -50%;left: -50%;}
.kl-overlay:hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(1) {top: 0;left: 0;}
.kl-overlay:hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(2) {top: 0;right: 0;}
.kl-overlay:hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(3), .kl-overlay.hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(3) {right: 0;bottom: 0;}
.kl-overlay:hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(4), .kl-overlay.hover .kl-card-overlay-split-q .kl-card-overlay-item:nth-child(4) {bottom: 0;left: 0;}
.kl-card-overlay-split-q.kl-inverse > .kl-card-overlay-item:nth-child(1) {top: 0;left: 0;}
.kl-card-overlay-split-q.kl-inverse > .kl-card-overlay-item:nth-child(2) {top: 0;right: 0;}
.kl-card-overlay-split-q.kl-inverse > .kl-card-overlay-item:nth-child(3) {right: 0;bottom: 0;}
.kl-card-overlay-split-q.kl-inverse > .kl-card-overlay-item:nth-child(4) {bottom: 0;left: 0;}
.kl-overlay:hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1), .kl-overlay.hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(1) {top: -50%;left: -50%;}
.kl-overlay:hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2), .kl-overlay.hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(2) {top: -50%;right: -50%;}
.kl-overlay:hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(3), .kl-overlay.hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(3) {right: -50%;bottom: -50%;}
.kl-overlay:hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(4), .kl-overlay.hover .kl-card-overlay-split-q.kl-inverse:not(.kl-static) .kl-card-overlay-item:nth-child(4) {bottom: -50%;left: -50%;}

.kl-overlay:hover .kl-card-overlay.kl-inverse:not(.kl-static), .kl-overlay.hover .kl-card-overlay.kl-inverse:not(.kl-static) {
    pointer-events: none;
}

/** -- FIGURE BLOCKS -- **/
.kl-figure-block {
    text-align:center;
}
.kl-figure-block > .kl-title {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 0.8em;
    color: #696969;
    display:block;
}
.kl-figure-block > .kl-figure {
    font-weight: bold;
    font-size: 1.7em;
    display:block;
}

.kl-card-overlay-split-q .kl-figure-block {
    position:absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}
.kl-card-overlay.kl-dark .kl-figure-block > .kl-title {
    color: #f8f8f8;
}
.kl-card-overlay.kl-lite .kl-figure-block > .kl-title {
    color: #e8e8e8;
}


/** -- CARD 1 STYLES -- **/
.kl-card-1 .kl-card-avatar.shadow {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(50, 50, 50, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(50, 50, 50, 0.75);
}
.kl-card-1 .kl-card-avatar.shadow-primary {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(2, 117, 216, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(2, 117, 216, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(2, 117, 216, 0.75);
}
.kl-card-1 .kl-card-avatar.shadow-success {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(92, 184, 92, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(92, 184, 92, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(92, 184, 92, 0.75);
}
.kl-card-1 .kl-card-avatar.shadow-warning {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(240, 173, 78, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(240, 173, 78, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(240, 173, 78, 0.75);
}
.kl-card-1 .kl-card-avatar.shadow-danger {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(217, 83, 79, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(217, 83, 79, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(217, 83, 79, 0.75);
}
.kl-card-1 .kl-card-avatar.shadow-info {
    -webkit-box-shadow: 3px 3px 3px 0px rgba(91, 192, 222, 0.75);
    -moz-box-shadow:    3px 3px 3px 0px rgba(91, 192, 222, 0.75);
    box-shadow:         3px 3px 3px 0px rgba(91, 192, 222, 0.75);
}
.kl-card-4 .card-subtitle {
    color: #2F9DD4;
    margin-bottom: 10px;
}
.kl-card-5 .kl-dropdown {
    position: absolute;
    top: 5px;
    right: 5px;
    z-index: 10;
}
.kl-card-5 .kl-dropdown > a {
    color: #fff;
    text-decoration: none;
}
.kl-card-5 .kl-dropdown > a:after{
    display:none;
}

/** -- TEXT STYLES -- **/
.kl-txt-shadow {
    text-shadow: 1px 1px 2px rgba(68, 68, 68, 1);
}
.kl-txt-shadow-l {
    text-shadow: 1px 1px 2px rgba(234, 234, 234, 1);
}

/** -- TRANSITION STYLES -- **/
.kl-card, .kl-card-avatar, .kl-card-avatar img, .kl-card-top, .kl-card-social img, kl-card .kl-card-overlay, .kl-card .kl-figure-block, .kl-card .kl-card-item {
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    -ms-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
}
.kl-card *.kl-fast {
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    -ms-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
.kl-card *.kl-slow {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    -ms-transition-duration: 0.8s;
   transition-duration: 0.8s;
}


.kl-card .kl-spin, .kl-card .kl-reveal, .kl-card .kl-shine, .kl-card .kl-gray, .kl-card .kl-fade, .kl-card .kl-show, .kl-card .kl-hide, .kl-card .kl-slide-in, .kl-card .kl-slide-out, .kl-card .kl-card-overlay {
    -webkit-transition-property: all;
    -moz-transition-property: all;
    -o-transition-property: all;
    -ms-transition-property: all;
    transition-property: all;
}
.kl-card *.kl-fade {
    background: rgb(232,232,232);
    background: -moz-linear-gradient(top,  rgba(232,232,232,1) 0%, rgba(232,232,232,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(232,232,232,1) 0%,rgba(232,232,232,1) 100%);
    background: linear-gradient(to bottom,  rgba(232,232,232,1) 0%,rgba(232,232,232,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e8e8e8', endColorstr='#e8e8e8',GradientType=0 );
}

.kl-card.kl-fade:hover *.kl-fade.kl-b-primary, .kl-card.kl-fade.hover *.kl-fade.kl-b-primary, .kl-card .kl-fade.kl-b-primary:hover, .kl-card .kl-fade.kl-b-primary.hover {
    background: rgb(2,117,216);
    background: -moz-linear-gradient(top,  rgba(2,117,216,1) 0%, rgba(2,117,216,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(2,117,216,1) 0%,rgba(2,117,216,1) 100%);
    background: linear-gradient(to bottom,  rgba(2,117,216,1) 0%,rgba(2,117,216,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0275d8', endColorstr='#0275d8',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-success, .kl-card.kl-fade.hover *.kl-fade.kl-b-success, .kl-card .kl-fade.kl-b-success:hover, .kl-card .kl-fade.kl-b-success.hover {
    background: rgb(92,184,92);
    background: -moz-linear-gradient(top,  rgba(92,184,92,1) 0%, rgba(92,184,92,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(92,184,92,1) 0%,rgba(92,184,92,1) 100%);
    background: linear-gradient(to bottom,  rgba(92,184,92,1) 0%,rgba(92,184,92,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5cb85c', endColorstr='#5cb85c',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-warning, .kl-card.kl-fade.hover *.kl-fade.kl-b-warning, .kl-card .kl-fade.kl-b-warning:hover, .kl-card .kl-fade.kl-b-warning.hover {
    background: rgb(240,173,78);
    background: -moz-linear-gradient(top,  rgba(240,173,7,1) 0%, rgba(240,173,7,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(240,173,7,1) 0%,rgba(240,173,7,1) 100%);
    background: linear-gradient(to bottom,  rgba(240,173,7,1) 0%,rgba(240,173,7,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0ad4e', endColorstr='#f0ad4e',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-danger, .kl-card.kl-fade.hover *.kl-fade.kl-b-danger, .kl-card .kl-fade.kl-b-danger:hover, .kl-card .kl-fade.kl-b-danger.hover {
    background: rgb(217,83,79);
    background: -moz-linear-gradient(top,  rgba(217,83,79,1) 0%, rgba(217,83,79,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(217,83,79,1) 0%,rgba(217,83,79,1) 100%);
    background: linear-gradient(to bottom,  rgba(217,83,79,1) 0%,rgba(217,83,79,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d9534f', endColorstr='#d9534f',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-info, .kl-card.kl-fade.hover *.kl-fade.kl-b-info, .kl-card .kl-fade.kl-b-info:hover, .kl-card .kl-fade.kl-b-info.hover {
    background: rgb(91,192,222);
    background: -moz-linear-gradient(top,  rgba(91,192,222,1) 0%, rgba(91,192,222,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(91,192,222,1) 0%,rgba(91,192,222,1) 100%);
    background: linear-gradient(to bottom,  rgba(91,192,222,1) 0%,rgba(91,192,222,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5bc0de', endColorstr='#5bc0de',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-white, .kl-card.kl-fade.hover *.kl-fade.kl-b-white, .kl-card .kl-fade.kl-b-white:hover, .kl-card .kl-fade.kl-b-white.hover {
    background: rgb(255,255,255);
    background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,1) 100%);
    background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 );
}
.kl-card.kl-fade:hover *.kl-fade.kl-b-black, .kl-card.kl-fade.hover *.kl-fade.kl-b-black, .kl-card .kl-fade.kl-b-black:hover, .kl-card .kl-fade.kl-b-black.hover {
    background: rgb(0,0,0);
    background: -moz-linear-gradient(top,  rgba(0,0,0,1) 0%, rgba(0,0,0,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(0,0,0,1) 0%,rgba(0,0,0,1) 100%);
    background: linear-gradient(to bottom,  rgba(0,0,0,1) 0%,rgba(0,0,0,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000',GradientType=0 );
}

/** -- Reveal -- **/
.kl-card.kl-reveal:hover .kl-reveal, .kl-card.kl-reveal.hover .kl-reveal, .kl-card .kl-reveal:hover, .kl-card .kl-reveal.hover {border-radius: 0;}

/** -- Shine -- **/
.kl-card .kl-shine:not(.kl-card-block) {filter: gray;-webkit-filter: grayscale(1);filter: grayscale(1);}
.kl-card.kl-shine:hover .kl-shine:not(.kl-card-block), .kl-card.kl-shine.hover .kl-shine:not(.kl-card-block),.kl-card-block.kl-shine:hover .kl-shine:not(.kl-card-block), .kl-card-block.kl-shine.hover .kl-shine:not(.kl-card-block), .kl-card .kl-shine:hover:not(.kl-card-block), .kl-card .kl-shine:not(.kl-card-block).hover {filter: none;-webkit-filter: grayscale(0);filter: grayscale(0);}

/** -- Gray -- **/
.kl-card .kl-gray:not(.kl-card-block) {filter: none;-webkit-filter: grayscale(0);filter: grayscale(0);}
.kl-card.kl-gray:hover .kl-gray:not(.kl-card-block), .kl-card.kl-gray.hover .kl-gray:not(.kl-card-block),.kl-card-block.kl-gray:hover .kl-gray:not(.kl-card-block), .kl-card-block.kl-gray.hover .kl-gray:not(.kl-card-block), .kl-card .kl-gray:hover:not(.kl-card-block), .kl-card .kl-gray:not(.kl-card-block).hover {filter: gray;-webkit-filter: grayscale(1);filter: grayscale(1);}


/** -- Spin -- **/
.kl-card.kl-spin:hover .kl-spin:not(.kl-card-block):not(.kl-card-item), .kl-card.kl-spin.hover .kl-spin:not(.kl-card-block):not(.kl-card-item),.kl-card-block.kl-spin:hover .kl-spin:not(.kl-card-block):not(.kl-card-item), .kl-card-block.kl-spin.hover .kl-spin:not(.kl-card-block):not(.kl-card-item), .kl-card .kl-spin:not(.kl-card-block):not(.kl-card-item):hover, .kl-card .kl-spin:not(.kl-card-block):not(.kl-card-item).hover {-moz-transform: rotate(360deg);-webkit-transform: rotate(360deg);-o-transform: rotate(360deg);-ms-transform: rotate(360deg);transform: rotate(360deg);}

/** -- Show -- **/
.kl-card .kl-show:not(.kl-card-block) {opacity: 0;}
.kl-card.kl-show:hover .kl-show:not(.kl-card-block), .kl-card.kl-show.hover .kl-show:not(.kl-card-block),.kl-card-block.kl-show:hover .kl-show:not(.kl-card-block), .kl-card-block.kl-show.hover .kl-show:not(.kl-card-block) {opacity: 1;}

/** -- Hide -- **/
.kl-card .kl-hide:not(.kl-card-block) {opacity: 1;}
.kl-card.kl-hide:hover .kl-hide:not(.kl-card-block), .kl-card.kl-hide.hover .kl-hide:not(.kl-card-block),.kl-card-block.kl-hide:hover .kl-hide:not(.kl-card-block), .kl-card-block.kl-hide.hover .kl-hide:not(.kl-card-block), .kl-card .kl-hide:hover:not(.kl-card-block), .kl-card .kl-hide:not(.kl-card-block).hover {opacity: 0;}

/** -- Slide In -- **/
.kl-pt.kl-slide-in {top: -100%;}
.kl-ptl.kl-slide-in {top: -100%;left:-100%;}
.kl-ptr.kl-slide-in {top: -100%;right:-100%;}
.kl-pb.kl-slide-in {bottom: -100%;}
.kl-pbl.kl-slide-in {bottom: -100%;left:-100%;}
.kl-pbr.kl-slide-in {bottom: -100%;right:-100%;}
.kl-pl.kl-slide-in {left:-100%;}
.kl-pr.kl-slide-in {right:-100%;}
.kl-card.kl-slide-in:hover .kl-pt.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pt.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pt.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pt.kl-slide-in:not(.kl-card-block)  {top: 0;}
.kl-card.kl-slide-in:hover .kl-ptl.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-ptl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-ptl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-ptl.kl-slide-in:not(.kl-card-block)  {top: 0;left:0;}
.kl-card.kl-slide-in:hover .kl-ptr.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-ptr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-ptr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-ptr.kl-slide-in:not(.kl-card-block)  {top: 0;right:0%;}
.kl-card.kl-slide-in:hover .kl-pb.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pb.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pb.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pb.kl-slide-in:not(.kl-card-block)  {bottom: 0;}
.kl-card.kl-slide-in:hover .kl-pbl.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pbl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pbl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pbl.kl-slide-in:not(.kl-card-block)  {bottom: 0;left:0;}
.kl-card.kl-slide-in:hover .kl-pbr.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pbr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pbr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pbr.kl-slide-in:not(.kl-card-block)  {bottom: 0;right:0;}
.kl-card.kl-slide-in:hover .kl-pl.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pl.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pl.kl-slide-in:not(.kl-card-block)  {left: 0;}
.kl-card.kl-slide-in:hover .kl-pr.kl-slide-in:not(.kl-card-block), .kl-card.kl-slide-in.hover .kl-pr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in:hover .kl-pr.kl-slide-in:not(.kl-card-block), .kl-card-block.kl-slide-in.hover .kl-pr.kl-slide-in:not(.kl-card-block)  {right:0;}

/** -- Slide Out -- **/
.kl-card.kl-slide-out:hover .kl-pt.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pt.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pt.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pt.kl-slide-out:not(.kl-card-block), .kl-card .kl-pt.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pt.kl-slide-out:not(.kl-card-block).hover  {top: -100%;}
.kl-card.kl-slide-out:hover .kl-ptl.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-ptl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-ptl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-ptl.kl-slide-out:not(.kl-card-block), .kl-card .kl-ptl.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-ptl.kl-slide-out:not(.kl-card-block).hover  {top: -100%;left:-100%;}
.kl-card.kl-slide-out:hover .kl-ptr.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-ptr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-ptr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-ptr.kl-slide-out:not(.kl-card-block), .kl-card .kl-ptr.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-ptr.kl-slide-out:not(.kl-card-block).hover  {top: -100%;right:-100%;}
.kl-card.kl-slide-out:hover .kl-pb.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pb.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pb.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pb.kl-slide-out:not(.kl-card-block), .kl-card .kl-pb.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pb.kl-slide-out:not(.kl-card-block).hover  {bottom: -100%;}
.kl-card.kl-slide-out:hover .kl-pbl.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pbl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pbl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pbl.kl-slide-out:not(.kl-card-block), .kl-card .kl-pbl.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pbl.kl-slide-out:not(.kl-card-block).hover  {bottom: -100%;left:-100%;}
.kl-card.kl-slide-out:hover .kl-pbr.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pbr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pbr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pbr.kl-slide-out:not(.kl-card-block), .kl-card .kl-pbr.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pbr.kl-slide-out:not(.kl-card-block).hover  {bottom: -100%;right:-100%;}
.kl-card.kl-slide-out:hover .kl-pl.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pl.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pl.kl-slide-out:not(.kl-card-block), .kl-card .kl-pl.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pl.kl-slide-out:not(.kl-card-block).hover  {left: -100%;}
.kl-card.kl-slide-out:hover .kl-pr.kl-slide-out:not(.kl-card-block), .kl-card.kl-slide-out.hover .kl-pr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out:hover .kl-pr.kl-slide-out:not(.kl-card-block), .kl-card-block.kl-slide-out.hover .kl-pr.kl-slide-out:not(.kl-card-block), .kl-card .kl-pr.kl-slide-out:not(.kl-card-block):hover, .kl-card .kl-pr.kl-slide-out:not(.kl-card-block).hover  {right:-100%;}


/** -- GENERAL STYLES -- **/
.kl-b {
    background: #e8e8e8;
}
.kl-b-primary {
    background: #0275d8;
}
.kl-b-success {
    background: #5cb85c;
}
.kl-b-warning {
    background: #f0ad4e;
}
.kl-b-danger {
    background: #d9534f;
}
.kl-b-info {
    background: #5bc0de;
}
.kl-b-white {
    background: #fff;
}
.kl-b-black {
    background: #000;
}
.kl-b-1 {
    padding: 1px;
}
.kl-b-2 {
    padding: 2px;
}
.kl-b-3 {
    padding: 3px;
}
.kl-b-4 {
    padding: 4px;
}
.kl-b-5 {
    padding: 5px;
}
.kl-b-6 {
    padding: 6px;
}
.kl-b-rounded {
    border-radius: 10px;
}
.kl-b-circle {
    border-radius: 50%;
}
.kl-b-house {
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
.kl-b-shield {
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
}
.kl-b-lemon {
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
}
.kl-b-lemon-inverse {
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
}
.kl-b-ring {
    border-top-left-radius: 30%;
    border-top-right-radius: 100%;
    border-bottom-right-radius: 30%;
    border-bottom-left-radius: 100%;
}
.kl-b-ring-inverse {
    border-top-left-radius: 100%;
    border-top-right-radius: 30%;
    border-bottom-right-radius: 100%;
    border-bottom-left-radius: 30%;
}
.kl-b-corner {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 0;
}
.kl-b-corner-inverse {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 50%;
}
.kl-shadow {
    -webkit-box-shadow: 0px 0px 5px 3px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px 0px 5px 3px rgba(50, 50, 50, 0.75);
    box-shadow:         0px 0px 5px 3px rgba(50, 50, 50, 0.75);
}
.kl-shadow-t {
    -webkit-box-shadow: 0px -5px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px -5px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         0px -5px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-r {
    -webkit-box-shadow: 5px 0px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    5px 0px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         5px 0px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-b {
    -webkit-box-shadow: 0px 5px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    0px 5px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         0px 5px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-l {
    -webkit-box-shadow: -5px 0px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    -5px 0px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         -5px 0px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-br {
    -webkit-box-shadow: 4px 4px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    4px 4px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         4px 4px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-bl {
    -webkit-box-shadow: -4px 4px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    -4px 4px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         -4px 4px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-tl {
    -webkit-box-shadow: -4px -4px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    -4px -4px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         -4px -4px 5px -1px rgba(50, 50, 50, 0.75);
}
.kl-shadow-tr {
    -webkit-box-shadow: 4px -4px 5px -1px rgba(50, 50, 50, 0.75);
    -moz-box-shadow:    4px -4px 5px -1px rgba(50, 50, 50, 0.75);
    box-shadow:         4px -4px 5px -1px rgba(50, 50, 50, 0.75);
}

.hw {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
.qw {
    width: 25%;
    margin-left: auto;
    margin-right: auto;
}
.tqw {
    width: 75%;
    margin-left: auto;
    margin-right: auto;
}

</style>


























<div class="row">
        <div class="col-md-9">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../dist/img/user2-160x160.jpg" alt="User Image">
                <span class="username"><a href="#">Rapha Ondobo.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">

              <p>I took this photo this morning. What do you guys think?</p>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>

      </div>
      <!-- /.row -->

      <div class="row">
            <div class="col-md-9">
              <!-- Box Comment -->
              <div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                    <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                    <span class="description">Shared publicly - 7:30 PM Today</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                      <i class="fa fa-circle-o"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">

                  <p>I took this photo this morning. What do you guys think?</p>
                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                  <span class="pull-right text-muted">127 likes - 3 comments</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            Maria Gonzales
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            Luna Stark
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                    </div>
                  </form>
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>

          </div>

          <div class="row">
                <div class="col-md-9">
                  <!-- Box Comment -->
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <span class="description">Shared publicly - 7:30 PM Today</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                          <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">

                      <p>I took this photo this morning. What do you guys think?</p>
                      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                      <span class="pull-right text-muted">127 likes - 3 comments</span>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer box-comments">
                      <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                              <span class="username">
                                Maria Gonzales
                                <span class="text-muted pull-right">8:03 PM Today</span>
                              </span><!-- /.username -->
                          It is a long established fact that a reader will be distracted
                          by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                      </div>
                      <!-- /.box-comment -->
                      <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                              <span class="username">
                                Luna Stark
                                <span class="text-muted pull-right">8:03 PM Today</span>
                              </span><!-- /.username -->
                          It is a long established fact that a reader will be distracted
                          by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                      </div>
                      <!-- /.box-comment -->
                    </div>
                    <!-- /.box-footer -->
                    <div class="box-footer">
                      <form action="#" method="post">
                        <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                      </form>
                    </div>
                    <!-- /.box-footer -->
                  </div>
                  <!-- /.box -->
                </div>

              </div>





@endsection
