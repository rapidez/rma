<?php

Route::middleware('web')->group(function () {
    Route::view('rma', 'rapidez-rma::rma');
});
