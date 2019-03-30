<!DOCTYPE html>
<!--<html dir="{[text_direction]}">-->
<html>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html, charset=UTF-8"/>
<meta name="viewport" content="initial-scale=1, viewport-fit=cover">
<head>

    <style type="text/css">
    .full_screen .tran3d {
        -webkit-transform: translate3d(0, 0, 0)
    }

    html,
    body {
        width: 100%;
        min-height: 100%;
        font-size: 14px;
        overflow-x: hidden;
        -ms-content-zooming: none;
        -ms-touch-action: none;
        touch-action: none;
    }

    .full_screen body,
    html.full_screen {
        height: 100%
    }

    body {
        font-family: "Helvetica", sans-serif;
        margin: 0;
        -webkit-user-select: none;
        -webkit-touch-callout: none;
        -ms-user-select: none;
        user-select: none;
        color: white;
        overflow-x: hidden;
        position: absolute;
        top: 0;
        background-color: rgba(0, 0, 0, 0.65) !important;
    }

    .blackBackgroundBody {
        background-color: #000 !important;
    }

    #mainContainer {
        position: absolute;
        width: 100%;
        min-height: 100%;
        display: none;
    }

    .iphone.video_fs_wrap {
        font-size: 10px
    }

    .dt {
        display: table;
        height: 100%
    }

    .dit {
        display: inline-table;
        height: 100%
    }

    .dtl {
        display: table
    }

    .ditl {
        display: inline-table
    }

    .dtcVam {
        display: table-cell;
        vertical-align: middle
    }

    .clear {
        clear: both;
        padding: 0 !important;
        margin: 0 !important
    }

    .radius {
        border-radius: 15px;
        -webkit-border-radius: 15px
    }

    .radius_wbv {
        border-radius: 2.9em 2.9em 1.6em 1.6em;
        -webkit-border-radius: 2.9em 2.9em 1.6em 1.6em;
    }

    .radius_bkgrd {
        border-radius: 2.3em 2.3em 1.1em 1.1em;
        -webkit-border-radius: 2.3em 2.3em 1.1em 1.1em;
    }

    .radius2 {
        border-radius: 1.4em;
        -webkit-border-radius: 1.4em;
        width: 150px;
        height: 150px;
    }

    .radius3 {
        border-radius: 1.3em;
        -webkit-border-radius: 1.3em;
    }

    .radius4 {
        border-radius: 2.5em;
        -webkit-border-radius: 2.5em
    }

    .radius5 {
        border-radius: 1.1em;
        -webkit-border-radius: 1.1em;
        border: 1px solid #DCDCDC;
    }

    .no_top_radius {
        border-top-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        border-top-right-radius: 0;
        -webkit-border-top-right-radius: 0;
    }

    .fr {
        float: right;
    }

    .fl {
        float: left;
    }

    #webview {
        position: absolute;
        top: 3%;
        left: 2%;
        bottom: 3%;
        right: 2%;
        border: 0.5em solid rgba(255, 255, 255, 0.3);
        overflow: hidden;
    }

    #webview_bckgrd {
        background-color: #E9E9E9;
        width: 100%;
        height: 100%
    }

    #wv_head {
        width: 100%;
        height: 8em;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid white;
        border-top-left-radius: 2.4em;
        -webkit-border-top-left-radius: 2.4em;
        border-top-right-radius: 2.4em;
        -webkit-border-top-right-radius: 2.4em
    }

    #g_logo {
        float: left;
        height: 100%
    }

    #g_logo img {
        display: inline-block;
        height: 80%;
        top: 10%;
        width: auto;
        position: relative;
        margin: 0 2em;
    }

    #head_text {
        height: 100%;
        overflow: hidden;
        font-size: 4em;
        line-height: 1em;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3)
    }

    #head_text b {
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 5px rgba(255, 255, 255, 1);
        display: inline-block;
        transform: scale(1, 1.2);
        -webkit-transform: scale(1, 1.2);
        -moz-transform: scale(1, 1.2);
        -ms-transform: scale(1, 1.2);
        -o-transform: scale(1, 1.2)
    }

    #head_text .free-currency {
        font-weight: bold;
        font-size: 0.8em;
        display: block;
    }

    #head_text .watch-any {
        font-weight: normal;
        font-size: 0.6em;
        display: block;
    }

    #wv_head_img_cont {
        position: relative;
        top: 0;
        width: 100%;
        overflow: hidden;
        z-index: 11;
        background-color: #35AFF8
    }

    #wv_head_img_cont .keep_ratio {
        padding: 4.22% 0;
        width: 100%
    }

    .full_screen .top_menu_fix {
        padding: 4.22% 0
    }

    #wv_head_img_cont .img_cont {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: 100% 100%
    }

    .header_top_radius {
        border-top-left-radius: 2.3em;
        border-top-right-radius: 2.3em
    }

    #head_close_map {
        width: 8em;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0
    }

    #loader_cont {
        position: fixed;
        width: 78px;
        height: 78px;
        left: 50%;
        right: 0;
        top: 50%;
        bottom: 0;
        display: block;
        z-index: 100;
        margin: -39px 0 0 -39px;
        background-image: url('data:image/gif;base64,R0lGODlhNgA3APMAAP////////7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/gAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAANgA3AAAEzBDISau9OOvNu/9gKI5kaZ4lkhBEgqCnws6EApMITb93uOqsRC8EpA1Bxdnx8wMKl51ckXcsGFiGAkamsy0LA9pAe1EFqRbBYCAYXXUGk4DWJhZN4dlAlMSLRW80cSVzM3UgB3ksAwcnamwkB28GjVCWl5iZmpucnZ4cj4eWoRqFLKJHpgSoFIoEe5ausBeyl7UYqqw9uaVrukOkn8LDxMXGx8ibwY6+JLxydCO3JdMg1dJ/Is+E0SPLcs3Jnt/F28XXw+jC5uXh4u89EQAh+QQJCgAAACwAAAAANgA3AAAEzhDISau9OOvNu/9gKI5kaZ5oqhYGQRiFWhaD6w6xLLa2a+iiXg8YEtqIIF7vh/QcarbB4YJIuBKIpuTAM0wtCqNiJBgMBCaE0ZUFCXpoknWdCEFvpfURdCcM8noEIW82cSNzRnWDZoYjamttWhphQmOSHFVXkZecnZ6foKFujJdlZxqELo1AqQSrFH1/TbEZtLM9shetrzK7qKSSpryixMXGx8jJyifCKc1kcMzRIrYl1Xy4J9cfvibdIs/MwMue4cffxtvE6qLoxubk8ScRACH5BAkKAAAALAAAAAA2ADcAAATOEMhJq7046827/2AojmRpnmiqrqwwDAJbCkRNxLI42MSQ6zzfD0Sz4YYfFwyZKxhqhgJJeSQVdraBNFSsVUVPHsEAzJrEtnJNSELXRN2bKcwjw19f0QG7PjA7B2EGfn+FhoeIiYoSCAk1CQiLFQpoChlUQwhuBJEWcXkpjm4JF3w9P5tvFqZsLKkEF58/omiksXiZm52SlGKWkhONj7vAxcbHyMkTmCjMcDygRNAjrCfVaqcm11zTJrIjzt64yojhxd/G28XqwOjG5uTxJhEAIfkECQoAAAAsAAAAADYANwAABM0QyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7/i8qmCoGQoacT8FZ4AXbFopfTwEBhhnQ4w2j0GRkgQYiEOLPI6ZUkgHZwd6EweLBqSlq6ytricICTUJCKwKkgojgiMIlwS1VEYlspcJIZAkvjXHlcnKIZokxJLG0KAlvZfAebeMuUi7FbGz2z/Rq8jozavn7Nev8CsRACH5BAkKAAAALAAAAAA2ADcAAATLEMhJq7046827/2AojmRpnmiqrqwwDAJbCkRNxLI42MSQ6zzfD0Sz4YYfFwzJNCmPzheUyJuKijVrZ2cTlrg1LwjcO5HFyeoJeyM9U++mfE6v2+/4PD6O5F/YWiqAGWdIhRiHP4kWg0ONGH4/kXqUlZaXmJlMBQY1BgVuUicFZ6AhjyOdPAQGQF0mqzauYbCxBFdqJao8rVeiGQgJNQkIFwdnB0MKsQrGqgbJPwi2BMV5wrYJetQ129x62LHaedO21nnLq82VwcPnIhEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7/g8Po7kX9haKoAZZ0iFGIc/iRaDQ40Yfj+RepSVlpeYAAgJNQkIlgo8NQqUCKI2nzNSIpynBAkzaiCuNl9BIbQ1tl0hraewbrIfpq6pbqsioaKkFwUGNQYFSJudxhUFZ9KUz6IGlbTfrpXcPN6UB2cHlgfcBuqZKBEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7yJEopZA4CsKPDUKfxIIgjZ+P3EWe4gECYtqFo82P2cXlTWXQReOiJE5bFqHj4qiUhmBgoSFho59rrKztLVMBQY1BgWzBWe8UUsiuYIGTpMglSaYIcpfnSHEPMYzyB8HZwdrqSMHxAbath2MsqO0zLLorua05OLvJxEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhfohELYHQuGBDgIJXU0Q5CKqtOXsdP0otITHjfTtiW2lnE37StXUwFNaSScXaGZvm4r0jU1RWV1hhTIWJiouMjVcFBjUGBY4WBWw1A5RDT3sTkVQGnGYYaUOYPaVip3MXoDyiP3k3GAeoAwdRnRoHoAa5lcHCw8TFxscduyjKIrOeRKRAbSe3I9Um1yHOJ9sjzCbfyInhwt3E2cPo5dHF5OLvJREAOwAAAAAAAAAAAA==');
        background-position: center;
        background-repeat: no-repeat;
        -webkit-transform: translateZ(0);
    }

    #gl_logo:before {
        display: block;
        position: relative;
        top: 3%;
        font-size: 2.4em;
        color: #A7C4C6
    }

    #cnt_connection_lost {
        font-size: 2em;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        z-index: 2147483647
    }

    #cancel_video_popup {
        -webkit-transform: translateZ(0);
        position: absolute;
        left: 0;
        top: 0;
        color: #000;
        z-index: 2147483647
    }

    #cancel_video_popup .info_cont {
        width: 36em;
        background: -webkit-linear-gradient(top, #FFF, #BABABA);
        background: -o-linear-gradient(bottom, #FFF, #BABABA);
        background: -moz-linear-gradient(bottom, #FFF, #BABABA);
        background: linear-gradient(to bottom, #FFF, #BABABA);
        text-align: center;
        position: relative
    }

    #cancel_video_popup .title {
        font-weight: bold;
        padding: 1em 1em 0 1em
    }

    #cancel_video_popup .title span {
        font-size: 3em
    }

    #cancel_video_popup .body {
        padding: 1em
    }

    #cancel_video_popup .body span {
        font-size: 2em
    }

    #cancel_video_popup .actions {
        color: #FFF;
        /*background: linear-gradient(to bottom, #29A1DE, #2376D6);*/
        background: transparent;
    }

    #cancel_video_popup .actions div {
        padding: 1em;
        width: 16em
    }

    #cancel_video_popup .actions span {
        font-size: 2.5em
    }

    #cancel_yes {
        float: left;
        font-weight: bold;
        border-top: 1px solid #FFF;
        background-color: #BABABA
    }

    #cancel_no {
        float: right;
        font-weight: bold;
        border-top: 1px solid #FFF;
        /*background-color: #2490DB;*/
        background: -webkit-linear-gradient(top, #29A1DE, #2376D6);
        background: -o-linear-gradient(bottom, #29A1DE, #2376D6);
        background: -moz-linear-gradient(bottom, #29A1DE, #2376D6);
        background: linear-gradient(to bottom, #29A1DE, #2376D6);
    }

    #wv_head.grd {
        background: #298CCA;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#52ACE0), to(#298CCA));
        background: -webkit-linear-gradient(top, #52ACE0, #298CCA);
        background: -moz-linear-gradient(top, #52ACE0, #298CCA);
        background: -ms-linear-gradient(top, #52ACE0, #298CCA);
        background: -o-linear-gradient(top, #52ACE0, #298CCA)
    }

    #ws_scroll_cont {
        margin: 0 1em;
        height: 100%;
        overflow: scroll;
        overflow-x: hidden;
        -webkit-touch-callout: none;
        -webkit-overflow-scrolling: touch;
        background-color: #E9E9E9
    }

    #wv_body_cont {
        width: 100%;
        height: auto;
        overflow: hidden
    }

    #wv_body {
        margin: 1em 0;
        overflow: visible
    }

    #wv_body .bnr_big {
        position: relative
    }

    #wv_body .bnr_big .bnr_img {
        display: block;
        width: 100%;
        height: auto;
        min-height: 8.5em
    }

    #bnr_new_flag {
        display: block;
        position: absolute;
        z-index: 10;
        right: 0;
        top: 0;
        bottom: 25%;
        height: 75%;
        width: auto
    }

    #wv_body .row {
        overflow: visible !important;
        padding: 0.15em;
        margin-bottom: 0.8em;
        border: 1px solid rgba(140, 140, 140, 0.2);
        border-top: 1px solid rgba(140, 140, 140, 0.6);
        border-bottom: 1px solid rgba(255, 255, 255, 1)
    }

    #wv_body .inner_row {
        white-space: nowrap;
        overflow: visible;
        padding: 0.3em;
        border: 1px solid #B7B7B7;
        border-top: 1px solid #B6B8B7;
        border-bottom: 1px solid #A7A7A7
    }

    #wv_body .cont {
        height: 7.2em
    }

    #wv_body .min_h {
        min-height: 7.2em;
        height: auto !important
    }

    #wv_body .game_thumb {
        margin-top: 1px;
        min-width: 7em;
        padding-right: 0.8em
    }

    #wv_body .game_thumb img {
        display: block;
        height: 100%;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6)
    }

    #wv_body .game_btn .btn {
        margin: 0 auto
    }

    #wv_body .game_btn {
        min-width: 8em;
        border: 2px solid white;
        position: relative;
        text-align: center
    }

    #wv_body .game_btn span {
        font-size: 1.9em;
        font-weight: bold;
        text-shadow: 0 1px 5px rgba(0, 0, 0, 0.8);
        color: white;
        padding: 0 0.2em;
        text-align: center
    }

    #wv_body .game_btn.install,
    #wv_body .game_btn.play_video {
        box-shadow: inset 0 1px 1px #88BDDD, inset 0 -1px 1px #5398C7, inset 1px 0 1px rgba(9, 119, 178, 0.6), inset -1px 0 1px rgba(9, 119, 178, 0.6)
    }

    #wv_body .game_btn.play_video {
        margin-right: 0.6em
    }

    #wv_body .game_btn.play_video img {
        display: block;
        position: relative;
        height: 60%;
        top: 20%;
        margin: 0 auto
    }

    #wv_body .game_btn.play {
        box-shadow: inset 0 1px 1px #94B5B3, inset 0 -1px 1px #969290, inset 1px 0 1px rgba(166, 176, 178, 0.6), inset -1px 0 1px rgba(166, 176, 178, 0.6)
    }

    #wv_body .game_btn.reward {
        margin-top: 1px;
        border: none;
        min-width: 4em;
        margin-left: 0.5em;
        text-align: center
    }

    #wv_body .game_btn.reward .reward_img {
        height: 50%
    }

    #wv_body .game_btn.reward img {
        display: block;
        position: relative;
        height: 90%;
        top: 5%;
        margin: 0 auto
    }

    #wv_body .game_btn.reward .amount {
        height: 50%;
        text-align: center;
        color: #054E80;
        text-shadow: 0 0 1px #497A9D;
        font-weight: bold;
        font-size: 2.3em
    }

    #wv_body .game_name_cont {
        margin-top: 1px;
        overflow: hidden;
        position: relative;
        padding-right: 0.6em
    }

    #wv_body .game_name_cont * {
        white-space: normal
    }

    #wv_body .game_name .name {
        font-size: 2.3em;
        color: #094E7E;
        text-shadow: 0 0 1px rgba(9, 78, 126, 0.5);
        font-weight: bold;
    }

    #wv_body .game_name .message {
        font-size: 1.8em;
        color: #252525;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.9)
    }

    #wv_body .game_name .reward-claimed-msg {
        color: #0080EB;
        font-size: 2em
    }

    #wv_body .game_name #btn_reward_img_cont {
        position: relative;
        display: inline-block
    }

    #wv_body .game_name #btn_reward_img_cont img {
        display: inline-block;
        height: 3em;
        width: auto
    }

    #wv_body .game_name #btn_reward_img_cont .img_text_cont {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding-left: 1.8em
    }

    #btn_reward_img_cont .img_text_cont .text {
        font-size: 2em;
        line-height: 1em;
        padding-top: 0.1em;
        text-align: center;
        width: 100%
    }

    #btn_reward_info_cont {
        font-size: 2em;
        padding: 0 0.6em;
        color: #0080EB
    }

    #wv_body .new_flag_cont {
        overflow: visible;
        width: 6.5em;
        height: 6.5em;
        background-size: 100% 100%
    }

    #rewards_info {
        position: absolute;
        top: 1em;
        left: 1em;
        right: 1em;
        padding: 2.8em;
        background-color: rgba(0, 0, 0, 0.7);
        text-align: center;
        z-index: 2147483647;
        border-radius: 1.4em;
        -webkit-border-radius: 1.4em
    }

    #rewards_info span {
        font-size: 2.8em
    }

    #rewards_info.hide_with_transition {
        opacity: 0;
        -webkit-transition: opacity 1s linear
    }

    #wv_body .row.grd {
        background: #BEBEBE;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#BEBEBE), to(#EBEBEB));
        background: -webkit-linear-gradient(top, #BEBEBE, #EBEBEB);
        background: -moz-linear-gradient(top, #BEBEBE, #EBEBEB);
        background: -ms-linear-gradient(top, #BEBEBE, #EBEBEB);
        background: -o-linear-gradient(top, #BEBEBE, #EBEBEB)
    }

    #wv_body .inner_row.grd {
        background: #E8E7E7;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F2F2F2), to(#DAD8D9));
        background: -webkit-linear-gradient(top, #F2F2F2, #DAD8D9);
        background: -moz-linear-gradient(top, #F2F2F2, #DAD8D9);
        background: -ms-linear-gradient(top, #F2F2F2, #DAD8D9);
        background: -o-linear-gradient(top, #F2F2F2, #DAD8D9)
    }

    #wv_body .install.grd,
    #wv_body .play_video.grd,
    #player_video_cont #btns_video_summary .grd {
        background: #2090C1;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#42C7F0), to(#0770AC));
        background: -webkit-linear-gradient(top, #42C7F0, #0770AC);
        background: -moz-linear-gradient(top, #42C7F0, #0770AC);
        background: -ms-linear-gradient(top, #42C7F0, #0770AC);
        background: -o-linear-gradient(top, #42C7F0, #0770AC)
    }

    #wv_body .play.grd {
        background: #FEA900;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEE300), to(#FF7900));
        background: -webkit-linear-gradient(top, #FEE300, #FF7900);
        background: -moz-linear-gradient(top, #FEE300, #FF7900);
        background: -ms-linear-gradient(top, #FEE300, #FF7900);
        background: -o-linear-gradient(top, #FEE300, #FF7900)
    }

    .not_full_screen body {
        background-color: #E9E9E9
    }

    .not_full_screen #webview {
        position: static;
        border: none;
        background-color: #E9E9E9;
        width: 100%
    }

    .not_full_screen #ws_scroll_cont {
        position: static;
        overflow: visible;
        margin-top: 0;
    }

    .ro_view_wrap #ws_scroll_cont {
        position: absolute;
        top: 8em;
        left: 0;
        right: 0;
        bottom: 0;
        height: auto;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    #player_video_cont {
        width: 100%;
        height: 100%;
        position: relative;
        background: black;
    }

    #player_video_cont #video_tag {
        width: auto;
        height: 99%;
        margin: 0 auto;
        display: block;
        background-color: black
    }

    #player_video_cont #subtitle {
        display: none;
    }

    #player_video_cont #btn_play_video {
        display: none;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        height: 100%;
        text-align: center;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    #player_video_cont #btn_play_video img {
        display: block;
        position: relative;
        height: 70%;
        top: 15%;
        width: auto;
        margin: 0 auto;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    #player_video_cont #video_poster {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #000
    }

    #player_video_cont #video_poster img {
        display: block;
        height: 100%;
        width: auto;
        margin: 0 auto;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        -webkit-border-top-left-radius: 0;
        -webkit-border-top-right-radius: 0
    }

    #btns_video_summary {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10
    }

    #btns_video_summary #img_replay {
        display: block;
        width: 10em;
        height: 10em;
        position: absolute;
        left: 0.8em;
        top: 0.8em;
        outline: none
    }

    #btns_video_summary #game_row {
        min-height: 12em;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.7);
        border-top: 1px solid #868686;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    #btns_video_summary #game_row.grd {
        cursor: pointer;
        background: #ffffff;
        background: rgba(255, 255, 255, 0.8);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255, 255, 255, 0.8)), to(rgba(255, 255, 255, 1)));
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 1));
        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 1));
        background: -ms-linear-gradient(top, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 1));
        background: -o-linear-gradient(top, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 1))
    }

    #btns_video_summary #icon_cont {
        margin: 0 2em
    }

    #btns_video_summary #icon_sub_cont {
        position: relative;
        bottom: 2.5em;
        padding: 1em;
        background: rgba(255, 255, 255, 0.7);
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3), -4px 4px 4px rgba(0, 0, 0, 0.3), 0 -2px 4px rgba(0, 0, 0, 0.3)
    }

    #btns_video_summary #icon_cont img {
        display: block;
        height: 11em;
        width: 11em
    }

    #btns_video_summary #game_data_cont {
        overflow: hidden;
        height: 100%
    }

    #btns_video_summary #game_data_cont .dt {
        width: 100%
    }

    #btns_video_summary .game_info {
        font-size: 2.5em
    }

    #btns_video_summary .game_info .title {
        display: block;
        font-weight: bold;
        text-shadow: 0 0 1px #88A8BF;
        color: #094E7E;
        padding-right: 20px
    }

    #btns_video_summary .game_info .title-ext {
        padding-left: 20px
    }

    #btns_video_summary .game_info .info {
        display: block;
        font-size: 0.7em;
        color: #252525
    }

    #btns_video_summary #down_cont {
        width: 30em;
        padding: 0 2em
    }

    #btns_video_summary #down_cont .dtl {
        border: 4px solid white;
        width: 100%
    }

    #btns_video_summary #down_cont .dtl {
        background: #2090C1;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#42C7F0), to(#0770AC));
        background: -webkit-linear-gradient(top, #42C7F0, #0770AC);
        background: -moz-linear-gradient(top, #42C7F0, #0770AC);
        background: -ms-linear-gradient(top, #42C7F0, #0770AC);
        background: -o-linear-gradient(top, #42C7F0, #0770AC)
    }

    #btns_video_summary #down_cont .dtcVam {
        padding: 0.7em;
        text-align: center
    }

    #btns_video_summary #down_cont img {
        width: 6em;
        height: 6em
    }

    #btns_video_summary #down_cont .text {
        font-size: 2em;
        font-weight: bold
    }

    .DE #btns_video_summary #down_cont .text {
        font-size: 2em
    }

    .FR #btns_video_summary #down_cont .text {
        font-size: 2em
    }

    .JP #btns_video_summary #down_cont .text {
        font-size: 2em
    }

    .RU #btns_video_summary #down_cont .text {
        font-size: 2.5em
    }

    #timer_cont {
        position: absolute;
        bottom: 0;
        left: 1em;
        height: 2em;
        font-size: 2em;
        text-shadow: 2px 2px 2px #000000
    }

    #timer_val {
        display: inline-block;
        min-width: 1em;
        text-align: right
    }

    #play_video_wrap #ws_scroll_cont {
        overflow: hidden;
        background: black
    }

    .video_fs_wrap #webview {
        background-color: #000
    }

    .video_fs_wrap #ws_scroll_cont {
        position: absolute;
        top: 0.9em;
        left: 0.9em;
        bottom: 0.9em;
        right: 0.9em;
        height: auto
    }

    .video_fs_wrap #head_close {
        width: 10em;
        height: 10em;
        border: none;
        position: absolute;
        right: 0.8em;
        top: 0.8em;
        z-index: 2147483647;
        outline: none
    }

    #skip_head {
        position: absolute;
        z-index: 2147483647;
        top: -101%;
        right: 15px;
        padding: 5px 10px;
        font-size: 1.4em;
        background: rgba(0,0,0,.65);
        border-radius: 0.5em;

        -webkit-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        -moz-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        transition: 0.3s all cubic-bezier(.55,0,.1,1);
    }
    #skip_head.active {
        top: 18px;
    }

    .video_fs_wrap #head_close img {
        display: block;
        position: static;
        width: 100%;
        height: 100%
    }

    .video_fs_wrap #player_video_cont #video_tag {
        width: auto;
        height: 100%
    }

    .video_fs_wrap #ws_scroll_cont {
        margin: 0
    }

    @media only screen and (min-width: 1px) {
        body {
            font-size: 20%
        }
    }

    @media only screen and (min-width: 270px) {
        body {
            font-size: 35%
        }
    }

    @media only screen and (min-width: 320px) {
        body {
            font-size: 38%
        }
    }

    @media only screen and (min-width: 360px) {
        body {
            font-size: 45%
        }
    }

    @media only screen and (min-width: 470px) {
        body {
            font-size: 48%
        }
    }

    @media only screen and (min-width: 470px) and (orientation: portrait) {
        body {
            font-size: 55%
        }
    }

    @media only screen and (min-width: 570px) {
        body {
            font-size: 65%
        }
    }

    @media only screen and (min-width: 650px) {
        body {
            font-size: 68%
        }
    }

    @media only screen and (min-width: 900px) {
        body {
            font-size: 81%
        }
    }

    @media only screen and (min-width: 1000px) {
        body {
            font-size: 84%
        }
    }

    @media only screen and (min-width: 1080px) and (orientation: portrait) {
        body {
            font-size: 98%
        }
    }

    @media only screen and (min-width: 1100px) {
        body {
            font-size: 87%
        }
    }

    @media only screen and (min-width: 1200px) {
        body {
            font-size: 90%
        }
    }

    @media only screen and (min-width: 1500px) {
        body {
            font-size: 105%
        }
    }

    @media only screen and (min-width: 1900px) {
        body {
            font-size: 130%
        }
    }

    @media only screen and (min-width: 2500px) {
        body {
            font-size: 140%
        }
    }

    @media only screen and (orientation: portrait) {
        #wv_body .cont {
            height: 9em
        }

        #wv_body .game_btn {
            min-width: 11em
        }

        #wv_body .min_h {
            min-height: 9em;
            height: auto !important
        }

        #player_video_cont #btn_play_video img {
            height: 36%;
            top: 32%
        }

        #player_video_cont #video_poster img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 0
        }

        #btns_video_summary #game_row {
            font-size: 0.7em
        }

        #wv_head_img_cont .keep_ratio {
            padding: 6.03%
        }

        .full_screen .top_menu_fix {
            padding: 6.03% 0
        }

        .prt_dt {
            display: table;
            height: 100%
        }

        .prt_dtcVam {
            display: table-cell;
            vertical-align: middle
        }
    }

    .iphone.video_fs_wrap #btns_video_summary #down_cont .dtl {
        border: 2px solid white
    }

    body.rotatedView {
        -webkit-transform: rotate(90deg); /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(90deg); /* IE 9 */
        transform: rotate(90deg); /* Firefox 16+, IE 10+, Opera */
    }

    #videoObject {
        position: fixed !important;
        top: 0;
        left: 0;
    }

    .mainContainerSlide {
        -webkit-animation-name: slide;
        -webkit-animation-duration: 1s;
        -webkit-animation-timing-function: cubic-bezier(0.1, 0.75, 0.25, 1);

        -moz-animation-name: slide;
        -moz-animation-duration: 1s;
        -moz-animation-timing-function: cubic-bezier(0.1, 0.75, 0.25, 1);

        -o-animation-name: slide;
        -o-animation-duration: 1s;
        -o-animation-timing-function: cubic-bezier(0.1, 0.75, 0.25, 1);

        animation-name: slide;
        animation-duration: 1s;
        animation-timing-function: cubic-bezier(0.1, 0.75, 0.25, 1);

        background-color: #000;
    }

    @-webkit-keyframes slide {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    @-moz-keyframes slide {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    @-o-keyframes slide {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    @keyframes slide {
        0% {
            transform: translateY(-100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    #gl_logo {
        display: block;
        -webkit-transform: translateZ(0)
    }

    #cancel_video_popup {
        display: none;
        z-index: 2147483647;
        -webkit-transform: translateZ(0)
    }

    #poor_connection {
        display: none;
        -webkit-transform: translateZ(0);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #000;
        z-index: 2147483647;
        height: 100%
    }

    #poor_connection .info_cont {
        width: 36em;
        background: rgba(255, 255, 255, 0.9);
        text-align: center;
        position: relative;
        top: 30%;
        margin: 0 auto
    }

    #poor_connection .title {
        font-weight: bold;
        padding: 1em 1em 0 1em
    }

    #poor_connection .title span {
        font-size: 3em
    }

    #poor_connection .body {
        padding: 1em
    }

    #poor_connection .body span {
        font-size: 2em
    }

    #poor_connection .actions {
        color: #60A5F2
    }

    #poor_connection .actions > div {
        font-weight: bold
    }

    #poor_connection .actions .pcEnd {
        padding: 1em;
        width: 15.9em;
        float: left;
        border-right: 1px solid #DCDCDC;
        border-top: 1px solid #DCDCDC
    }

    #poor_connection .actions .pcRetry {
        padding: 1em;
        width: 15.9em;
        float: left;
        border-top: 1px solid #DCDCDC
    }

    #poor_connection .actions span {
        font-size: 2.5em
    }

    #endScreen {
        display: none;
        position: relative;
        background-color: #000000
    }

    #cancel_yes,
    #cancel_no {
        cursor: pointer
    }

    #cancel_video_popup {
        position: fixed;
        top: 50%;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center
    }

    #cancel_video_popup > div {
        display: inline-block;
        vertical-align: middle
    }

    #cancel_video_popup .info_cont {
        margin-top: -8em
    }

    #unsupported_video {
        display: none;
        background: #FFFFFF;
        color: #000000;
        left: 0;
        position: absolute;
        right: 0;
        top: 30%;
        z-index: 2147483647;
        width: 36em;
        margin: 0 auto;
        border-radius: 1.1em;
        -webkit-transform: translateZ(0)
    }

    #unsupported_video .title {
        font-weight: bold;
        padding: 0.5em 0.5em 0;
        font-size: 3em;
        text-align: center
    }

    #unsupported_video .body {
        padding: 0.5em;
        text-align: center;
        font-size: 2em
    }

    #unsupported_video .actions {
        color: #60A5F2;
        border-top: 1px solid #DCDCDC;
        text-align: center;
        font-size: 2.5em;
        cursor: pointer;
        padding: 0.3em
    }

    #cnt_connection_lost {
        display: none;
        z-index: 2147483647;
        -webkit-transform: translateZ(0)
    }

    #cnt_connection_lost .dt {
        width: 100%;
        height: 100%;
        text-align: center
    }

    #counterNumber {
        margin-top: -43px;
        position: absolute;
        z-index: 1000;
        font-size: 15px;
        width: 60px;
        height: 40px;
        text-align: center;
        font-weight: 900;
        font-family: Tahoma, sans-serif;
        color: #50e1ff
    }

    #counterContainer {
        display: none;
        z-index: 1001;
        position: absolute;
        /*bottom: 0.78em !important;*/
        left: 20px;
        -webkit-transform: translateZ(0)
    }

    #playOverlay {
        display: none;
        position: absolute;
        z-index: 1000;
        cursor: pointer;
        -webkit-transform: translateZ(0)
    }

    .playOverlayButton {
        background-size: auto 30%;
        background: no-repeat center center;
        cursor: pointer;
        height: 100%
    }

    #game_row {
        cursor: pointer
    }

    #img_replay {
        cursor: pointer
    }

    #fader {
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 9998;
        background-color: #000000;
        opacity: 0.4;
        position: absolute
    }

    .EDfooterEndScreen {
        min-height: inherit !important
    }

    .EDDownload {
        padding: 10px 20px 5px 10px !important
    }

    .CPGameInfo {
        width: 100%;
        display: block
    }

    .CPDownload {
        margin: 10px auto;
        display: block;
    }

    #endScreenLowResolution {
        display: none
    }

    #videoPlayerOverlay {
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        height: 1px
    }

    #timeout_window {
        display: none;
        -webkit-transform: translateZ(0);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #000;
        z-index: 2147483647;
        height: 100%
    }

    #timeout_window .info_cont {
        width: 36em;
        background: -webkit-linear-gradient(top, #FFF, #BABABA);
        background: -o-linear-gradient(bottom, #FFF, #BABABA);
        background: -moz-linear-gradient(bottom, #FFF, #BABABA);
        background: linear-gradient(to bottom, #FFF, #BABABA);
        text-align: center;
        position: relative;
        top: 30%;
        margin: 0 auto
    }

    #timeout_window .title {
        font-weight: bold;
        padding: 1em 1em 0 1em
    }

    #timeout_window .title span {
        font-size: 3em
    }

    #timeout_window .body {
        padding: 1em
    }

    #timeout_window .body span {
        font-size: 2em
    }

    #timeout_window .actions {
        color: #FFF;
        background: transparent;
    }

    #timeout_window .actions > div {
        font-weight: bold
    }

    #timeout_window .actions .pcEnd {
        padding: 1em;
        width: 16em;
        float: left;
        border-top: 1px solid #FFF;
        background-color: #BABABA
    }

    #timeout_window .actions .pcRetry {
        padding: 1em;
        width: 16em;
        float: right;
        border-top: 1px solid #FFF;
        background: -webkit-linear-gradient(top, #29A1DE, #2376D6);
        background: -o-linear-gradient(bottom, #29A1DE, #2376D6);
        background: -moz-linear-gradient(bottom, #29A1DE, #2376D6);
        background: linear-gradient(to bottom, #29A1DE, #2376D6);
    }

    #timeout_window .actions span {
        font-size: 2.5em
    }

    body.win-81,
    body.win-80 {
        position: relative
    }

    .win-81 #cancel_video_popup,
    .win-81 #head_info_btn,
    .win-81 #btns_video_summary,
    .win-81 #playOverlay,
    .win-81 #loader_cont,
    .win-80 #cancel_video_popup,
    .win-80 #head_info_btn,
    .win-80 #btns_video_summary,
    .win-80 #playOverlay,
    .win-80 #loader_cont {
        position: absolute !important
    }

    .win-81 #endScreen,
    .win-80 #endScreen {
        position: static
    }

    #debug_content {
        display: none;
        position: absolute;
        top: 0;
        left: 50%;
        right: 0;
        height: 50%;
        overflow-x: hidden;
        overflow-y: scroll;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        font-size: 14px;
        padding: 5px;
        z-index: 99999
    }

    #videoObject.onOldWin {
        display: none !important
    }

    .video_fs_wrap #head_close {
        width: auto;
        height: auto;
        top: 0;
        right: 0;
        padding: 15px
    }

    .video_fs_wrap #head_close img {
        width: 40px;
        height: 40px
    }

    #head_info_btn {
        position: fixed;
        z-index: 2147483647;
        top: 10%;
        left: -99999px;
        display: block;
        visibility: visible;
        outline: none;
        font-size: 2em;
        line-height: 2.2em;
        color: #fff;
        text-align: center;
        text-decoration: none;
        background: rgba(0,0,0,0.4);
        padding: 0.2em 1em;
        margin: 0;
        border: 1px solid #fff;
        border-left: 1px solid transparent;
        border-radius: 0 5px 5px 0;
        white-space: nowrap;

        -webkit-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        -moz-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        transition: 0.3s all cubic-bezier(.55,0,.1,1);

        -webkit-transform: translateX(0%) translateY(0%) scale(1);
        -ms-transform: translateX(0%) translateY(0%) scale(1);
        transform: translateX(0%) translateY(0%) scale(1);
    }
    #head_info_btn.active {
        left: 0;
    }
    #head_info_btn.centered {
        top: 50%;
        left: 50%;

        -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
        -ms-transform: translateX(-50%) translateY(-50%) scale(1);
        transform: translateX(-50%) translateY(-50%) scale(1);
        border-left: 1px solid #fff;

        border-radius: 10px;
        font-size: 30px;
        line-height: 50px;
        padding: 0 18px;
    }

    #head_info_btn.animate {
        -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
        -ms-transform: translateX(-50%) translateY(-50%) scale(1);
        transform: translateX(-50%) translateY(-50%) scale(1);

    }

    #head_info_btn.animate .hand_animation {
        position: absolute;
        bottom: -60px;
        right: -55px;
        width: 80px;
        height: 80px;

        background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Qjk0OTAwMTQxMUYxMTFFNjhEMzQ5QTFGN0E2MEJCN0UiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Qjk0OTAwMTUxMUYxMTFFNjhEMzQ5QTFGN0E2MEJCN0UiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCOTQ5MDAxMjExRjExMUU2OEQzNDlBMUY3QTYwQkI3RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCOTQ5MDAxMzExRjExMUU2OEQzNDlBMUY3QTYwQkI3RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjGNJx4AAAx+SURBVHja7FwJTFXLGT4IiLiVuiuvbi8aQC1apWrUIGrjAlqtCyCu4FYEF3w+cXmmVuG1xMd7QkSJdYnR2DbmRY2KFFOK+1bUiBrjbqLGDXFfcTrfcU7fYZg5d+Gey7l5/MkEcu8/d2a+M/PPN///z1GUGqkRK0tjWhbTcoyWl7QQWkppKaBlBi3+NRDJ5a+NGzcmixcvJseOHSMvX74kkNLSUlJQUEBmzJhB/P39AWgq/Vjx1GKGfElLzvTp08nz58+Jkdy+fZsMHDgQvVhTA+BPkrN69Wpir7x//57ExMSgJ9/XAKgo38bHxxNH5e3bt6RTp07oTezPGcBfUiFlZWXEGTl06BDx8vJCj7zcDEAtWkbTsoOWy2yTu07LHloSsNG5C8CvqAjB+fTpEykqKiKbN28mt27dkoI4btw49GiRi4Dxo6UHLZG0RNDSWqCTVKtWLTJ69GiyY8cOcvnyZXWTu379OtmzZw9JSEjQNrpv3AHgIcwiEXhxcXFoqYiWzX5+fmTv3r1CAAFunTp1oNuoCsD1pGUL2unRoweJjIwkERERpHXr1vjyAi2JbNZ937NnT3Lx4kXDlXHv3j0SFRWFumvNBrAUT4+XI0eOoJUjOr3IFi1akGfPngk7vHTpUuhnOAGcD0Dp2LEj2bJlC3nx4kWl375w4QKZNm0a0WYdbK89gkkwc+ZMNJJtJoDCxrdv345WtnO6f1m0aJFQHwNv2bIl6vxW10lfWqJp2UbLWWajjmNW0BJOizd2/+TkZLtAOXnyJHn9+rVDNvrjx49kwIAB6MxXZgH4kIqQ6/n6+qKl2jrdhlhiN27cEHYWthLLnXVwIepHR0eTbdu2kbNnz6o26vjx42Tt2rUkPDwcSqeTkpKI2YJ20W/03wwAC3DCEMncuXPRUhqnvxDLSCTl5eWq/cIMGzRokBRoTU6fPq3OkKoKbDDs8507d6Q6WDlYQWYA+EcqwkZhG3GsozohXJ3/UJHSmtmzZ6v2xx2yfv164u3tjT7u9fHxIZs2bRLqwXbDhlO937gaQH9s+Xfv3hU2nJ2drRphrk50t27d1BnnagHwubm56tJPTU0ljx8/luo+ffpUoyuhDJQwsAEZ5dqwYQOUNphxElk2efJkYaMfPnwgISEhaPH3XJ2/UXE5gGyp5bLNZ2Xnzp3JmzdvhLrnz5+H7nluc1gEXiozMV27doXSOFcD6IXTBGySSA4cOIBGD3B1uhvRGtGmdPjwYcNdFLOvXr16vLHPTEtLE+oD2CZNmkApSKevjgVtiaSwsBBKhWY4E+L79OkjtV3Dhg1Dw3N03EelNVhmtmTJkiUqh6P6h0F1iouLpTOELUl/HSBf1K9fn9y/f19YZ82aNZW8QlTGYzOTmRhsgtgMzQDx71SEjeK4xGiNrw7AX8DmGO22p06dguIpnLlZnelBQUGqaRAJjmFUZzkHyPKpU6dKvUL4PaoTxdXZAmIuEvRXozWuBjAcRyeZzZkzZw4aXaUBqPE9Ga2BbNy4EUobucFlYeaIBDMNMw4zT+84wAw+c+aMsM6+ffugtI8/GrZq1Up4stHTGjNmYebKlSuFjT558kSjNcFcZ6W05ty5c1A4x+kH4XdkOyxsHvrB1Uno16+f9EENHjwYSklcnYxly5bZpDWuBrAVZoCM1mRlZaHRLK6jhrRm7Nixqs3h6qzEjJZtDm3btoVSBFfnn1SEdeBcAA/E2Vqn3xgmBhuYEa0xYxYa0prg4GA0PIIbnJTWwOYwb02A/pyMAcO2igRAATCujYh27dpJTQzO1HgwXJ1UcEp30xrV5shoTV5eHhrN4zpqSGsQpOK9NdjVhw4dKqU0WLJgB1ydzPT0dGEdmAQ4h7UNS09r4F1yO63p27evlNZg4ACAG5yU1sCYM5sTxtXJwwORnZUZ/aml0/9VgwYNpLRm1qxZUJrFtREHWiMbi5m05h9UpLSG2RxfXUcNaQ3OqVRnEze4EUa0ZsqUKZVCqEa0hvkllwr8f9VCa/q3adPGFq3hbc7CMWPGSG1O9+7dKwWhjGgNNgDmLPDmaQ1vYsAJWZCrk8jjHRgYWD20ZtWqVVKbw2hNENfZIsRS7A1C2aI1eIhUpw3XRjw+P3jwoOoSu3nzprYU1xh4vw1pTfPmzaHUwdUABoLWIMZgcJTiaU2MEa0ZNWoUlEbZQ2sQLWQ7eB0BIIjKHaTlIy03afnaRvjAkNZkZmaq/NOMWfgNbJGraA2cn/DfcfoqrcnPz6/gjoetQ9zaheFQKa3B8g4ICFDplqVpzf79+6GwXzC4kQBx5MiRqn1lDybbxfFkldYgtCCSlJQUKKWYQmvAyxylNQsWLKiki02GfjfGIEo3knl+gk0Kyk9C2FQkJSUlUCgxK3PLUVpTF08bgXuEJjGDJ06ciC9yqjmtQ52Fly5dEo6FMYXuZgDoDK2ph5AiC46f5k8W1QjiQirCcWRkZKinJrNmocO0xqLJRS3h3BVFBa9duwaFa2YB6DCtsXB21r+pCMfRpUsXKHUxC0RDWsM8xMM9AMBkeHAMnB+LzQLQkNbIaIoFAfyCipBZnDhxAkonzMylNqQ1Q4YMQQeSPSDB8r9UhOf2pk2bQrGpKejZ8hCDIvAeYosC+C0V4RhiY2NVx4eZAEbA9e6Ih9iCAPaF39MoIGYagLYC36A1jRo1siSt0YkPVoroyIlkJfr9HbMBdDjwbcEk872y7FvGKIJMA1DzECOJUZQkKQt8WwzABaIzOwQXi5TPt7NMsYHB8MGxTNbdI0aMEDJ7UeDbYgB2g/9SJEgOZRm2FZOJqohfFPIKg4ODhw0fPlwJDQ1V6DJWysrKFMrg0ZtKFSitUfLz8+GtyVYsIF5eXjyvLX/48KFCj6IV9KgdVOj5H3awjavazujQoYM6qxwR0Bo+wmaxizY/UjEMKbgCvB/g95MFZmxJWFhYpbCmhQCcjcxakTAX3MQKU9YJ8FJ69eo1d9euXepydUboqUX9o1hTjlARfkFPXOqfqvy4H+KmV69edTrzFFcULL6EvRE+FV15g7NY+XydzGmZhosuRncx0DBylhHxgvf56NGjatoE/kdAvVmzZujEFGLty4b5+qCWXqp6Lv4XFeEPIyGTpdmW0fKUltvM+3yU5Zzg/01WsX02AFxORThOdm0sylkAn2J2iVLKWNZAuNUdqHYCOAj3W0SyYsUKVFrh7CYSQKXSh8XFxUp5efk2+vtFiucLiGFYSYk4INe7d2/1j7M/XiYyrrgixjKupnv4DByPKB3cV7LbTrh0pHy+k+yUSI0rMu6RtKN8vhLm42EAdqUlF8c42bUIfe4M1X3mLIBxuDssEzwdHLqZAzXJA8DDTYN0bH64FWXPjSvJjS27ReVIItc3v6kwV34enytjIfCS8KARwxZtjCKKBpccS3AKqRIXxBnYnkaRKxMaGooGt8LwWgS43+G8i13W1m13ffovljebeS7xCaYj7UF0v1gUlNm6dauWbZ9lVp6LHcAF0vJd+/bticxZIErqZPGQQjMS0FfgMo4saZuXd+/eqVcj2EkE6RIt3JX/glQ2eMuRSWHPTXfo4I6M9mYmMzlTHM61SOiWufJFuXcgow0bNkTn/ixKmHQheLEaLZElU/KC2clecPEd7sq4g3iCjC935AlDHj16RObPn68Z5VRXUh8qobSsh90SvYlEtvH1798flX9kdtI9wtsYPD24v+29hI2ZgexTRn2SXUVLcIPdnj5gM4T/T6Nebj/3CAbRB7ED7L6OeKvhqWYH9Z20DDSblgDcnJwczQGSzhI6lWoHUDcgeCz2Ie0DLi17ZefOnQS3K5EpYI/PUKMleIucE7Qkx8zMqyoBqBvgBLi0EKmDT9AewXk7MTFRc7yON6IluDPnKC1h1yvGEZNef+dSAHUDTgQgkyZNUu9y2CM4l4K007qr4Q2vCi2Bbt26dbUNy4uY+P5AUwAkP71p7evatWur+TIPHjywOfhXr16RefPm/X82OkNLGIkHLQm00x9oTQB1ncZbkP6EWQROKEtK4mcjNhnZzScRLWGvelJpiYMOVWsDqOt8CyQlYZnK3prkqGAHxmuk7PUIeTSAukH8AUsTfNAeCiKjJevWratAS6rg0vcsAHWbQzoozO7dux0CD8ua0ZJ1tPzaBTERzwNQN6AhSFCaMGECEb3P0ICWxLgwqOS5AOoGloYQgegWu0ZL2GtRKtCSGgC5W+zwauMqxZUrV9R4BF4ICZ+ejJZ4HIBuknm0XGHBHOQg9lVqpEZqhMr/BBgAZTsfW/b9otsAAAAASUVORK5CYII=') center center no-repeat;
        -webkit-animation:showToggle 2s infinite;
        -moz-animation:showToggle 2s infinite;
        animation: showToggle 2s infinite;
        -webkit-animation-fill-mode: forwards;
    }

    @-webkit-keyframes showToggle {
        from { opacity: 0.0; }
        99% { opacity: 1.0; }
        to {} /* equals `100% {}` Leave it empty to fix the flicker */
    }

    @keyframes showToggle {
        from { opacity: 0.0; }
        99% { opacity: 1.0; }
        to {} /* equals `100% {}` Leave it empty to fix the flicker */
    }

    @-webkit-keyframes clickToggle {
        0%   {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        45%  {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        52%  {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
            transform: translateX(-50%) translateY(-50%) scale(0.9);
        }
        62% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
            transform: translateX(-50%) translateY(-50%) scale(0.9);
        }
        70% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        100% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
    }

    @keyframes clickToggle {
        0%   {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        45%  {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        52%  {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
            transform: translateX(-50%) translateY(-50%) scale(0.9);
        }
        62% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
            transform: translateX(-50%) translateY(-50%) scale(0.9);
        }
        70% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
        100% {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }
    }

    #advtext {
        -webkit-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        -moz-transition: 0.3s all cubic-bezier(.55,0,.1,1);
        transition: 0.3s all cubic-bezier(.55,0,.1,1);
    }


    #head_info_btn.clicked {
        -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
        -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
        transform: translateX(-50%) translateY(-50%) scale(0.9);
    }

    #btns_video_summary {
        z-index: 2147483647;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -62px !important;
        margin-top: -62px !important;
        width: 65px;
        height: 65px;
        padding: 30px
    }

    #head_close #close_image,
    #head_info_btn #info_image,
    #playOverlay {
        width: 54px !important;
        height: 54px !important
    }

    #playOverlay {
        position: fixed;
        top: 50%;
        left: 50%;
        margin: -27px 0 0 -27px;
    }

    #btns_video_summary #img_replay {
        position: static;
        top: 0;
        left: 0;
        width: 65px !important;
        height: 65px !important
    }

    #counterNumber {
        top: 10px !important;
        left: 10px !important;
        font-size: 27px !important;
        line-height: 50px !important;
        width: 50px !important;
        height: 50px !important;
        border-width: 2px !important
    }

    @media screen and (max-width: 1024px) {
        #head_close #close_image,
        #head_info_btn #info_image,
        #playOverlay {
            width: 44px !important;
            height: 44px !important
        }

        #playOverlay {
            margin: -22px 0 0 -22px;
        }

        #btns_video_summary {
            margin-left: -60px !important;
            margin-top: -60px !important;
            width: 60px !important;
            height: 60px !important
        }

        #btns_video_summary #img_replay {
            width: 60px !important;
            height: 60px !important
        }

        #counterNumber {
            top: 10px !important;
            left: 10px !important;
            font-size: 22px !important;
            line-height: 40px !important;
            width: 40px !important;
            height: 40px !important;
            border-width: 2px !important
        }
    }

    @media screen and (max-width: 768px) {
        #head_close #close_image,
        #head_info_btn #info_image,
        #playOverlay {
            width: 34px !important;
            height: 34px !important
        }

        #playOverlay {
            margin: -22px 0 0 -22px;
        }

        #btns_video_summary {
            margin-left: -55px !important;
            margin-top: -55px !important;
            width: 50px !important;
            height: 50px !important
        }

        #btns_video_summary #img_replay {
            width: 50px !important;
            height: 50px !important
        }

        #counterNumber {
            top: 10px !important;
            left: 10px !important;
            font-size: 17px !important;
            line-height: 32px !important;
            width: 32px !important;
            height: 32px !important;
            border-width: 1px !important
        }
    }

    div#debug {
        left: 5px;
        top: 5px;
        position: relative;
        z-index: 1000000;
        background-color: white;
        color: black;
        display: none;
        padding: 10px;
    }

    #videoObject.onOldWin {
        width: 0;
        height: 0;
        opacity: 0;
        overflow: hidden;
    }

    #counterContainer #counterNumber {
        margin: 0;
        position: absolute;
        top: 8px;
        left: 8px;
        text-align: center;
        line-height: 36px;
        font-family: sans-serif;
        font-size: 20px;
        font-weight: 400;
        color: #fff;
        display: block;
        height: 36px;
        width: 36px;
        border: 2px solid #fff;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.4);
    }

    #counterContainer {
        width: auto;
        height: auto;
        bottom: 0;
        left: 0;
        margin: 0 0 9px 5px;
    }

    #head_close {
        top: 0 !important;
        right: 0 !important;
    }

    .advertismentLabel {
        bottom: 0px;
        right: 0px;
        font-family: arial;
        color: #FFFFFF;
        z-index: 2147483647;
        font-size: 1.4em;
        display: block;
        text-shadow: 1px 1px 5px #000000, -1px -1px 5px #000000, 1px 1px 5px #000000, -1px -1px 5px #000000;
        position: absolute;
    }

    .advertismentLabelIcon {
        width: 1.2em;
        height: auto;
        margin-bottom: -0.2em;
    }

    .advertismentLabelText {

    }

    .advertismentLabelShiftLayer {
        display: block;
        text-decoration: none;
        color: inherit;
        margin: 9px;
    }

    .advertismentLabelLinkLayer {
        position: absolute;
        display: block;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
    }

    #buddyPackWsContainer {
        position: absolute;
        display: none;
        z-index: 2147483600;
    }

    #buddyPackWsImage {
        position: absolute;
        z-index: 2147483600;
    }

    #buddyPackWsCloseContainer {
        right: 6%;
        top: 6%;
        padding-left: 3%;
        padding-bottom: 3%;
        position: absolute;
        z-index:2147483605;
    }

    #buddyPackWsCloseImage {
        position: relative;
        width: 30px;
        z-index:214748360;
    }

    .wsAdvertismentLabel {
        bottom: 0px;
        right: 8%;
        font-family: arial, sans-serif;
        color: #FFFFFF;
        z-index: 2147483605;
        font-size: 0.8em;
        display: block;
        text-shadow: 1px 1px 5px #000000, -1px -1px 5px #000000, 1px 1px 5px #000000, -1px -1px 5px #000000;
        position: absolute;
    }

    #wsOverlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 1;
        background-color:#000000;
        opacity:0.5;
    }

    #specialWsContainer {
        position: absolute;
        display: none;
        z-index: 2147483600;
    }

    #specialWsImage {
        position: absolute;
        z-index: 2147483600;
    }

    #specialWsCloseContainer {
        right: 1%;
        top: 1%;
        padding-left: 3%;
        padding-bottom: 3%;
        position: absolute;
        z-index:2147483605;
    }

    #specialWsCloseImage {
        position: relative;
        width: 30px;
        z-index:214748360;
    }

    .specialWsAdvertismentLabel {
        bottom: 3px;
        left: 1%;
        font-family: arial, sans-serif;
        color: #FFFFFF;
        z-index: 2147483605;
        font-size: 0.8em;
        display: block;
        text-shadow: 1px 1px 5px #000000, -1px -1px 5px #000000, 1px 1px 5px #000000, -1px -1px 5px #000000;
        position: absolute;
    }

    video {
        pointer-events:none !important;
    }
</style>
    <style type="text/css">
        #adLoaderIFrame {
            display: none
        }

        #adDisplayContainer {
            position: fixed;
                    z-index: 5;
        }

        #adDisplayContainer > canvas {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        #vpaidPreventClickthroughLayer {
            z-index: 2147483500;
            position: absolute;
            top: 0 !important;
            left:0 !important;
            width: 100%;
            height: 100%;
            right: 0 !important;
            bottom: 0 !important;
        }
    </style>

    <style>
        @-webkit-keyframes borderToggle {
    0% {
        border-color: #fff;
        color: #fff;
    }
    45% {
        border-color: #fff;
        color: #fff;
    }
    52% {
        border-color: #ffd300;
        color: #ffd300;
    }
    70% {
        border-color: #ffd300;
        color: #ffd300;
    }
    100% {
        border-color: #fff;
        color: #fff;
    }
}

@keyframes borderToggle {
    0% {
        border-color: #fff;
        color: #fff;
    }
    45% {
        border-color: #fff;
        color: #fff;
    }
    52% {
        border-color: #ffd300;
        color: #ffd300;
    }
    70% {
        border-color: #ffd300;
        color: #ffd300;
    }
    100% {
        border-color: #fff;
        color: #fff;
    }
}
    </style>
    <style>
        #head_info_btn.yellow-xxl.centered {
    font-size: 3.5rem;
    line-height: 3.5rem;
    padding: 3.5rem 5rem;
    margin: 0;

    background-color: rgba(0, 0, 0, 0.65);
    border: 2px solid #fff;
    border-radius: 1rem;
}

    </style>


    <script type="text/javascript">
    var glftSspClickParser = function (options) {
        var _this = this;

        var settings = {
            glftSspRouter: '',
            adStatusObject: {}
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        this.parseAllIframes = function (domIframeContainer) {
            if (!domIframeContainer) {
                return;
            }

            try {
                var iframes = domIframeContainer.getElementsByTagName('iframe');
                if (typeof iframes === 'undefined' || !iframes || iframes.length < 1) {
                    return;
                }

                for (var i = 0; i < iframes.length; i++) {
                    // get single iframe object
                    var iframe = iframes[i];

                    // get the iframe's content if possible
                    var iframeContent = (iframe.contentWindow) ? iframe.contentWindow :
                            (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;

                    // fetching iframe window object
                    var iframeWindow = iframe.contentWindow || iframe;

                    if (iframeContent && iframeContent.document && iframeWindow) {
                        // Override iframe open functionality to allow us to intercept link opening via javascript
                        window.open = iframeWindow.open = function (url) {
                            if (url.indexOf('http') === 0) {
                                url = 'link:' + url;
                            }
                            settings.glftSspRouter.redirect(url);
                        };

                        // Override some DOM elements
                        var iasContainerToHide = iframeContent.document.getElementById('ias-countdown-timer');
                        if (iasContainerToHide) {
                            iasContainerToHide.style.display = 'none';
                            iasContainerToHide.style.visibility = 'hidden';
                        }



                        // Override DOM elements for surveys
                        if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                            var videoControls = iframeContent.document.getElementsByClassName('video_controls')[0];
                            if (videoControls) {
                                videoControls.style.position = 'absolute';
                                videoControls.style.left = '-999999px';
                            }

                            var videoOverlay = iframeContent.document.getElementsByClassName('video_paused_overlay')[0];
                            if (videoOverlay) {
                                videoOverlay.style.position = 'absolute';
                                videoOverlay.style.left = '-999999px';
                            }
                        }

                        // ToDo: remove this function
                        _this.iframeAnchorParser(iframeContent);

                        _this.parseAllIframes(iframeContent.document);
                    }
                }
            } catch (err) {
            }
        };

        // looping on the iframe, attaching link: as needed
        this.iframeAnchorParser = function (iframeContent) {
            iframeAnchors = iframeContent.document.getElementsByTagName('a');

            if (typeof iframeAnchors != 'undefined' && iframeAnchors != '' && iframeAnchors != null && iframeAnchors.length > 0) {
                for (var i = 0; i < iframeAnchors.length; i++) {
                    if (iframeAnchors[i].href.indexOf('http') != -1) {
                        if (iframeAnchors[i].href.indexOf('link:') == -1 && (settings._os != 'win' && settings._os != 'winp' && settings._os != 'WINDOWS')) {
                            iframeAnchors[i].href = 'link:' + iframeAnchors[i].href;
                        } else if (settings._os == 'win' || settings._os == 'winp' || settings._os == 'WINDOWS') {
                            // check not already bound
                            alreadyBoundAttribute = iframeAnchors[i].getAttribute('data-alreadybound');
                            if (alreadyBoundAttribute == null || typeof alreadyBoundAttribute == 'undefined' || alreadyBoundAttribute == '') {
                                // set already bound
                                iframeAnchors[i].setAttribute('data-alreadybound', 'yes');

                                // bind click to redirect and prevent default
                                iframeAnchors[i].addEventListener('click', function (e) {
                                    settings.glftSspRouter.redirect('link:' + this.href);

                                    e.preventDefault();
                                    return false;
                                });
                            }
                        }
                    }
                }
            }

            setTimeout(
                    function () {
                        _this.iframeAnchorParser(iframeContent);
                    },
                    100
            );
        };
    }
</script>


    <script type="text/javascript">
    var glftSspCircularTimer = function (options) {
        var _this = this;

        var settings = {
            adStatusObject: '',
            counterContainerObject: '',
            canvasObject: '',
            counterNumberObject: '',
            progressBarColor: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        this.initialized = false;
        this.storedPercent = -1; // percent reached
        this.storedRemainingSeconds = 999; // remaining seconds reached

        this.defaultsCleanup = function () {
            _this.initialized = false;
            _this.storedPercent = -1; // percent reached
            _this.storedRemainingSeconds = 999; // remaining seconds reached
        };

        this.setOptions = function (options) {
            for (var key in options) {
                if (options.hasOwnProperty(key)) {
                    settings[key] = options[key];
                }
            }
        };

        this.counterClean = function () {
            // only hide it, no need to change any other settings
            settings.counterContainerObject.style.display = 'none';
        };

        this.counterUpdate = function (receivedValue) {
            if (_this.storedPercent === receivedValue) {
                return false;
            }
            _this.storedPercent = receivedValue;

            receivedValue = parseInt(receivedValue);

            if (receivedValue > 100) {
                return false;
            }

            if (receivedValue % 5 !== 0) {
                while (receivedValue % 5 !== 0) {
                    receivedValue -= 1;
                }
            }

            if (receivedValue === 0) {
                receivedValue = 1;
            }

            receivedValue = receivedValue / 10 * 2;

            radiusValues = [0];
            for (i = -0.4; i <= 1.4; i = Number((i + 0.1).toFixed(1))) {
                radiusValues[radiusValues.length] = i;
            }
            radiusValues[radiusValues.length] = 2;

            var iconsDimension = 56;
            if (window.innerWidth > 1024) {
                iconsDimension = 54;
            } else if (window.innerWidth > 768) {
                iconsDimension = 44;
            } else {
                iconsDimension = 34;
            }

            var border = 2,
                    lnWidth = 7;
            if (window.innerWidth < 768) {
                border = 1;
                lnWidth = 5;
            }

            settings.canvasObject.setAttribute('width', iconsDimension + 16);
            settings.canvasObject.setAttribute('height', iconsDimension + 16);

            var arcObject = settings.canvasObject.getContext('2d');

            arcObject.beginPath(); // begins a path
            arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 0, 2 * Math.PI);

            arcObject.strokeStyle = "rgba(255, 255, 255, 0.4)";
            arcObject.lineWidth = lnWidth;
            arcObject.stroke();

            arcObject.beginPath(); // resets the current path
            if (radiusValues[receivedValue] === 2) {
                arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 0, radiusValues[receivedValue] * Math.PI);
            } else {
                arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 1.5 * Math.PI, radiusValues[receivedValue] * Math.PI);
            }

            arcObject.strokeStyle = settings.progressBarColor;
            arcObject.lineWidth = lnWidth;
            arcObject.stroke();

            settings.counterNumberObject.setAttribute('style',
                    'top: 10px; ' +
                    'left: 10px; ' +
                    'font-size: ' + (iconsDimension / 2 + 2) + 'px; ' +
                    'line-height: ' + (iconsDimension - (border * 2)) + 'px; ' +
                    'width: ' + (iconsDimension - (border * 2)) + 'px; ' +
                    'height: ' + (iconsDimension - (border * 2)) + 'px; ' +
                    'border-width: ' + border + 'px;'
            );

            return true;
        };

        this.counterControl = function (totalDuration, remainingSeconds) {
            if (settings.adStatusObject.getEnded() === true) {
                return false;
            }

            // return early if totalDuration is an unexpected value
            if (isNaN(totalDuration) || totalDuration <= 1) {
                return false;
            }

            // initialize for method calls with only 1 parameter
            if (!remainingSeconds) {
                _this.initialized = true;
                remainingSeconds = totalDuration;
            }

            if (_this.storedRemainingSeconds < remainingSeconds) {
                return false;
            }
            _this.storedRemainingSeconds = remainingSeconds;

            // console.log('remainingSeconds: %s', remainingSeconds);
            // console.log('totalDuration: %s', totalDuration);

            settings.counterContainerObject.style.display = 'block';

            var remainingSecondsText, percent;
            remainingSecondsText = Math.ceil(remainingSeconds);

            if (remainingSecondsText < 0) {
                remainingSecondsText = 0;
            }
            settings.counterNumberObject.innerHTML = remainingSecondsText;

            percent = Math.ceil(100 - (remainingSeconds) * 100 / totalDuration);
            if (percent < 0) {
                percent = 0;
            }
            if (percent >= 99) {
                percent = 100;
            }

            _this.counterUpdate(percent);
        };
    };
</script>


    <script type="text/javascript">
    var glftSspCloseButtonHandler = function (options) {
        var _this = this;

        var settings = {
            closeButtonDomObject: '',
            adStatusObject: {}
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        this.closeButtonHandlerInitialCall = true;
        this.closeButtonHandlerDone = false;
        this.closeButtonHandlerStartHandled = false;
        this.closeButtonHandlerShowDelay = 5000;
                this.closeButtonHandlerShowDelayExtra = 5000;
                this.closeButtonHandlerStep = 250;
        this.closeButtonHandlerTimePassed = 0;

        this.showClose = function () {
            if (typeof inIframe === 'function' && inIframe()) {
                return;
            }
            // hide skippable
            document.getElementById('skip_head').style.visibility = 'hidden';

            setTimeout(function () {
                // show exit button
                closeButtonDomObject.style.visibility = 'visible';
            }, 600);
        };

        this.handleClose = function () {
            if (_this.closeButtonHandlerInitialCall) {
                document.getElementById('skip_head').className = 'active';

                _this.closeButtonHandlerInitialCall = false;
            } else {
                if (settings.adStatusObject.getPaused() !== true) {
                    // increment passed time
                    _this.closeButtonHandlerTimePassed = _this.closeButtonHandlerTimePassed + _this.closeButtonHandlerStep;

                    // check ad status, if loaded, set current delay to
                    if (settings.adStatusObject.getLoaded() === true && _this.closeButtonHandlerStartHandled === false) {
                        _this.closeButtonHandlerShowDelay = _this.closeButtonHandlerShowDelayExtra;
                        _this.closeButtonHandlerTimePassed = 0;

                        _this.closeButtonHandlerStartHandled = true;
                    }

                    if (settings.adStatusObject.getLoaded() === true) {
                        var skippableInPrecision = (_this.closeButtonHandlerShowDelay - _this.closeButtonHandlerTimePassed) / 1000;
                        var skippableIn = Math.ceil(skippableInPrecision);

                        var videoTimeLeft = Math.ceil(settings.adStatusObject.getDuration() - settings.adStatusObject.getProgress());
                        if (videoTimeLeft <= 0) {
                            // show button if videoTimeLeft is negative
                            _this.closeButtonHandlerTimePassed = _this.closeButtonHandlerShowDelay;
                        }

                        if (!isNaN(videoTimeLeft) && skippableIn > videoTimeLeft  && settings.adStatusObject.getDuration() > 0) {
                            skippableIn = videoTimeLeft;
                        }
                        document.getElementById('skip_seconds').innerHTML = skippableIn;
                    }

                    // show button if maximum timer passed
                    if (_this.closeButtonHandlerTimePassed >= _this.closeButtonHandlerShowDelay) {
                        document.getElementById('skip_head').style.visibility = 'hidden';

                        _this.showClose();

                        _this.closeButtonHandlerDone = true;
                    }
                }
            }

            if (_this.closeButtonHandlerDone === false) {
                setTimeout(
                        function () {
                            _this.handleClose();
                        },
                        _this.closeButtonHandlerStep
                );
            }
        };
    }
</script>

    <script type="text/javascript">
    var glftSspInfoButtonHandler = function (options) {
        var _this = this;

        var settings = {
            infoButtonDomObject: '',
            adStatusObject: {},
            toolsObject: '',
            displayingInfoButton: false
        };
        for (var key in options) {
            settings[key] = options[key];
        }

        this.infoButtonHandlerInitialCall = true;
        this.infoButtonHandlerDone = false;
        this.infoButtonHandlerStartHandled = false;
        this.infoButtonHandlerShowDelay = 5000;
        this.infoButtonHandlerShowDelayExtra = 10000;
        this.infoButtonHandlerStep = 250;
        this.infoButtonHandlerTimePassed = 0;

        this.showInfo = function (ended) {
            // only proceed if there's a link under the learn more button
            if (!settings.displayingInfoButton) {
                return false;
            }

            // show info button
            document.getElementById('head_info_btn').classList.add('active');

            // animate/move info button to the middle
            if (ended) {
                if (settings.adStatusObject.getMoreInfoButtonDisabled()) {
                    settings.infoButtonDomObject.style.display = 'none';

                    return false;
                }
                setTimeout(function () {
                    document.getElementById('head_info_btn').classList.remove('active');
                    document.getElementById('head_info_btn').classList.add('centered');

                    setTimeout(function() {
                        document.getElementById('head_info_btn').classList.add('animate');
                        document.getElementById('head_info_btn').insertAdjacentHTML('beforeend', '<span class="hand_animation"></span>');
                    }, 200);
                }, 200);
            }
        };

        this.handleInfo = function () {
            if (_this.infoButtonHandlerInitialCall === true) {
                _this.infoButtonHandlerInitialCall = false;
            } else {
                if (settings.adStatusObject.getPaused() !== true) {
                    // increment passed time
                    _this.infoButtonHandlerTimePassed = _this.infoButtonHandlerTimePassed + _this.infoButtonHandlerStep;

                    // check video status, if loaded, set current delay to
                    if (settings.adStatusObject.getLoaded() === true && _this.infoButtonHandlerStartHandled === false) {
                        _this.infoButtonHandlerShowDelay = _this.infoButtonHandlerShowDelayExtra;
                        _this.infoButtonHandlerTimePassed = 0;

                        _this.infoButtonHandlerStartHandled = true;
                    }

                    // show button if maximum timer passed
                    if (_this.infoButtonHandlerTimePassed >= _this.infoButtonHandlerShowDelay) {
                        _this.showInfo();

                        settings.infoButtonDomObject.style.visibility = 'visible';

                        _this.infoButtonHandlerDone = true;
                    }
                }
            }

            if (_this.infoButtonHandlerDone == false) {
                setTimeout(
                        function () {
                            _this.handleInfo();
                        },
                        _this.infoButtonHandlerStep
                );
            }
        };
    }
</script>


    <script type="text/javascript">
    var glftSspIVRewardHandler = function (options) {
        var _this = this;

        var settings = {
            closeButtonObject: '',
            infoButtonObject: '',
            videoStateHandlerObject: '',
            iHttpReturn: '',
            rewardUrl: '',
            rewardCurrency: '',
            notifyReward: '',
            adStatusObject: '',
            sspRouter: '',
            displayingInfoButton: false,
            closeButtoneHandlerObject: '',
            infoButtonHandlerObject: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        this.isRewardable = function () {
            if (settings.adStatusObject.getRewardDelivered() === 1 ||
                settings.rewardUrl.indexOf('[rewardUrl]') > -1 ||
                settings.rewardCurrency.indexOf('[rewardCurrency]') > -1 ||
                settings.rewardUrl === '' ||
                settings.rewardCurrency === ''
            ) {
                return false;
            }

            return true;
        };

        this.rewardHandler = function () {
            // prepare caller
            settings.iHttpReturn.async = false;
            settings.iHttpReturn.dataType = 'json';
            settings.iHttpReturn.crossDomain = true;

            // call the reward url
            settings.iHttpReturn.call(settings.rewardUrl, this.rewardNotification);
        };

        this.rewardNotification = function (iHttpObj) {
            if (settings.notifyReward !== 1) {
                return;
            }

            var tcall = iHttpObj.request;
            iHttpObj.request.onreadystatechange = function () {
                // hide cancel if present
                settings.videoStateHandlerObject.changePopupState('hide');

                if (tcall.readyState === 4) {
                    var exitString = 'exit:';
                    if (tcall.status === 200 && settings.adStatusObject.getRewardDelivered() !== 1) {
                        var myArr = JSON.parse(tcall.responseText);
                        if (myArr.status === "success") {
                            settings.adStatusObject.setRewardDelivered(1);

                            // building the reward exit string
                            if (typeof inIframe === 'function' && inIframe()) {
                                // for vban_iv only
                                exitString = 'mraid://closewithreward?currency=' + settings.rewardCurrency + '&delivered=' + settings.adStatusObject.getRewardDelivered();
                            } else {
                                exitString = 'exit:checkreward:' + settings.rewardCurrency;
                            }
                        }
                    }

                    // change what the close button does
                    settings.adStatusObject.setExitString(exitString);

                    if (typeof inIframe === 'function' && inIframe()) {
                        // for vban_iv only
                        settings.sspRouter.redirect(exitString);
                    }

                    // show exit button
                    settings.closeButtoneHandlerObject.showClose();

                    // show info button
                    if (settings.displayingInfoButton && settings.displayingInfoButton === true) {
                        settings.infoButtonHandlerObject.showInfo(true);
                    }
                }
            }
        };
    };
</script>

    <script type="text/javascript">
    var glftSspVPlayer = function (options) {
        var _this = this;

        var settings = {
            vastData: '',
            videoDomObject: '',
            cornerTimerObject: '',
            closeButtonObject: '',
            infoButtonObject: '',
            videoStateHandlerObject: '',
            rewardHandlerObject: '',
            adStatusObject: {},
            displayingInfoButton: displayingInfoButton,
            closeButtonHandlerObject: '',
            infoButtonHandlerObject: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        var internalSettings = {
            mp4FileUrl: '', // url of the mp4 file if it's the case
            playUsingMp4FileUrl: false // play using the mp4 file above
        };

        this.cleanUp = function () {
            resumeEventAdded = false;

            internalSettings = {
                mp4FileUrl: '', // url of the mp4 file if it's the case
                playUsingMp4FileUrl: false // play using the mp4 file above
            };

            // remove play event
            settings.videoDomObject.removeEventListener('play', _this.playEvent);

            // remove time update event
            settings.videoDomObject.removeEventListener('timeupdate', _this.timeupdateEvent);

            // remove pause event
            settings.videoDomObject.removeEventListener('pause', _this.pauseEvent);

            // remove event to loaded meta data
            settings.videoDomObject.removeEventListener('loadedmetadata', _this.loadedmetadataEvent);

            // remove ended
            settings.videoDomObject.removeEventListener('ended', _this.endedEvent);

            // remove error event
            settings.videoDomObject.removeEventListener('ended', _this.errorEvent);

            // remove resume event
            settings.videoDomObject.removeEventListener('play', _this.resumeEvent);
        };

        this.setOptions = function (options) {
            for (var key in options) {
                if (options.hasOwnProperty(key)) {
                    internalSettings[key] = options[key];
                }
            }
        };

        this.videoCompleteProcessing = function () {
            if (settings.adStatusObject.getEnded() === true) {
                return false;
            }

            // show close button
            settings.closeButtonHandlerObject.showClose();

            // show info button
            if (settings.displayingInfoButton && settings.displayingInfoButton === true) {
                settings.infoButtonHandlerObject.showInfo(true);
            }

            // set counter at top to 0
            settings.cornerTimerObject.counterClean();

            // move advertisment text
            document.getElementById('advertismentLabel').style.right = '';
            document.getElementById('advertismentLabel').style.left = '0px';

            // reward if not already attempted
            if (settings.rewardHandlerObject.isRewardable() && !settings.adStatusObject.getRewardAttempted()) {
                settings.adStatusObject.setRewardAttempted(true);
                var _rewardHandlerObject = settings.rewardHandlerObject;
                setTimeout(
                        function () {
                            _rewardHandlerObject.rewardHandler();
                        },
                        10
                );
            }

            settings.adStatusObject.setEnded(true);

            if (settings.adStatusObject.getAdMode() === 'mp4') {
                                glftSspVideoCompanionAdsObject.showEndCard();
                            }
        };

        this.init = function () {
            if (
                typeof settings.vastData['mediaFile']['duration'] !== 'undefined' &&
                settings.vastData['mediaFile']['duration'] !== null &&
                settings.vastData['mediaFile']['duration'] !== '' &&
                settings.vastData['mediaFile']['duration'] !== 'N/A' &&
                settings.vastData['mediaFile']['duration'] !== '00:00:00'
            ) {
                settings.adStatusObject.setVastMediaFileDuration(settings.vastData['mediaFile']['duration']);
            }

            // set video duration
            var arrD = settings.adStatusObject.getVastMediaFileDuration().split(':');
            var strSecs = (+arrD[0]) * 60 * 60 + (+arrD[1]) * 60 + (+arrD[2]);
            if (isNaN(strSecs) || !isFinite(strSecs) || strSecs <= 0) {
                strSecs = 1;
            }
            settings.adStatusObject.setDuration(strSecs);

            // Attach play event
            settings.videoDomObject.addEventListener('play', _this.playEvent);

            // Attach time update event
            settings.videoDomObject.addEventListener('timeupdate', _this.timeupdateEvent);

            // Attach pause event
            settings.videoDomObject.addEventListener('pause', _this.pauseEvent);

            // attach event to loaded meta data
            settings.videoDomObject.addEventListener('loadedmetadata', _this.loadedmetadataEvent);

            // attach ended
            settings.videoDomObject.addEventListener('ended', _this.endedEvent);

            // attach error event
            settings.videoDomObject.addEventListener('error', _this.errorEvent);

            // set
            if (internalSettings.playUsingMp4FileUrl) {
                settings.videoDomObject.src = internalSettings.mp4FileUrl;
                settings.videoDomObject.load();
            }

            this.initMoat();
        };

        this.videoDuration = function() {
            var duration = 30;
            if (!isNaN(settings.videoDomObject.duration) && isFinite(settings.videoDomObject.duration) && settings.videoDomObject.duration > 1) {
                duration = settings.videoDomObject.duration;
            }
            if (settings.adStatusObject.getDuration() && !isNaN(settings.adStatusObject.getDuration()) && settings.adStatusObject.getDuration() > 1) {
                duration = settings.adStatusObject.getDuration();
            }

            return duration;
        };

        this.initMoat = function() {
                    };

        this.maintainVideoState = function() {
            // video player defaults
            settings.videoDomObject.style.width = '100%';
            settings.videoDomObject.style.height = '100%';
            settings.videoDomObject.style.visibility = 'visible';

            // document body defaults
            document.body.style.backgroundColor = "#000000";
            document.body.style.position = 'absolute';

            setTimeout(
                    function () {
                        _this.maintainVideoState();
                    },
                    50
            );
        };

        this.correctWebmSource = function() {
            // return early if video source is not WEBM (not supported by iOS)
            if (!settings.videoDomObject.src || settings.videoDomObject.src.split('.').pop() !== 'webm') {
                return false;
            }

            // return early if no others sources are available
            if (!settings.videoDomObject.children || settings.videoDomObject.children.length < 1) {
                return false;
            }

            for (var i = 0; i < settings.videoDomObject.children.length; i++) {
                if (settings.videoDomObject.children[i].src) {
                    var src = settings.videoDomObject.children[i].src;
                    var extension = src.split('.').pop();

                    if (extension === 'mp4') {
                        settings.videoDomObject.src = src;
                        break;
                    }
                }
            }
        };

        var resumeEventAdded = false;
        this.playEvent = function () {
            if (internalSettings.playUsingMp4FileUrl) {
                // hide loader if it's an mp4 playing mode (not vpaid); for vpaid it's left to the vpaid wrapper;
                document.getElementById('loader_cont').style.display = 'none';
            }

            settings.adStatusObject.trackGlotImpression();

            // remove play event
            settings.videoDomObject.removeEventListener('play', _this.playEvent);

            if (resumeEventAdded !== true) {
                // Attach resume event
                settings.videoDomObject.addEventListener('play', _this.resumeEvent);
            }

            resumeEventAdded = true;
        };

        this.loadedmetadataEvent = function () {
            if (internalSettings.playUsingMp4FileUrl) {
                settings.adStatusObject.setLoaded(true);
            }

            // try to fetch video duration from video that loaded
            if (!isNaN(settings.videoDomObject.duration) && isFinite(settings.videoDomObject.duration) && settings.videoDomObject.duration > 1) {
                settings.adStatusObject.setDuration(Math.floor(settings.videoDomObject.duration));
            }
            if (settings.adStatusObject.getDuration() && !isNaN(settings.adStatusObject.getDuration()) && settings.adStatusObject.getDuration() > 1) {
                settings.cornerTimerObject.counterControl(settings.adStatusObject.getDuration());
            }

            // Can we pause music?
            var can_pause_music = '{[can_pause_music]}';
            // Check if we can pause music
            if (can_pause_music === '1') {
                if (_os === "win" || _os === "winp" || _os === "WINDOWS") {
                    window.external.notify('pauseusermusic:');
                } else {
                    document.location = 'pauseusermusic:';
                }
            }

            // track impression
            settings.adStatusObject.trackImpression();

            // remove controls
            settings.videoDomObject.removeAttribute("controls");

            // remove loadedmetadata event
            //settings.videoDomObject.removeEventListener('loadedmetadata', _this.loadedmetadataEvent);
        };

        this.timeupdateEvent = function () {
            var currentTime = Math.floor(settings.videoDomObject.currentTime);

            // update progress
            settings.adStatusObject.setProgress(currentTime);

            // updating video state object
            settings.videoStateHandlerObject.setPlayedTime(settings.videoDomObject.currentTime);

            // update count timer
            if (settings.adStatusObject.getDuration() && !isNaN(settings.adStatusObject.getDuration()) && settings.adStatusObject.getDuration() > 0) {
                var remainingTime = settings.adStatusObject.getDuration() - currentTime;
                if (isNaN(remainingTime) || remainingTime < 0) {
                    remainingTime = 0;
                }
                settings.cornerTimerObject.counterControl(settings.adStatusObject.getDuration(), remainingTime);

                // start
                if ((currentTime >= 0)) {
                    settings.adStatusObject.trackAdVideoStart();
                }

                // first quartile
                if ((currentTime === (Math.floor(settings.adStatusObject.getDuration() / 4)))) {
                    settings.adStatusObject.trackAdVideoFirstQuartile();
                }

                // midpoint
                if ((currentTime === (Math.floor(settings.adStatusObject.getDuration() / 2)))) {
                    settings.adStatusObject.trackAdVideoMidpoint();
                }

                // third quartile
                if ((currentTime === ((Math.floor(settings.adStatusObject.getDuration() / 2)) + (Math.floor(settings.adStatusObject.getDuration() / 4))))) {
                    settings.adStatusObject.trackAdVideoThirdQuartile();
                }

                // end
                if ((currentTime >= (settings.adStatusObject.getDuration()))) {
                    settings.adStatusObject.trackAdVideoComplete();

                    _this.videoCompleteProcessing();
                }
            }
        };

        this.pauseEvent = function () {
            // console.log("glftSspVPlayer pauseEvent called !");

            // block the pause event for surveys (triggered while tapping "Next" after the 1st survey question)
            if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                return false;
            }

            settings.adStatusObject.trackPaused();

            if (settings.adStatusObject.getEnded() !== true) {
                settings.videoStateHandlerObject.changePopupState('show');
            }
        };

        this.resumeEvent = function () {
            // console.log("glftSspVPlayer resumeEvent called !");
            if (settings.adStatusObject.getAdMode() === 'mp4') {
                window.popupPauseInterval = setInterval(function () {
                    if (settings.videoStateHandlerObject.popupDisplayed() || settings.adStatusObject.getPaused() === true) {
                        // pause video
                        document.getElementById('videoObject').pause();

                        // flag video status as paused
                        settings.adStatusObject.setPaused(true);
                    }
                }, 100);

                if (settings.videoStateHandlerObject.popupDisplayed() || settings.adStatusObject.getPaused() === true) {
                    return false;
                }
            }

            settings.adStatusObject.trackResumed();

            if (settings.adStatusObject.getAdMode() === 'mp4') {
                settings.adStatusObject.setPaused(false);

                settings.videoStateHandlerObject.changePopupState('hide');
            }
        };

        this.endedEvent = function () {
            //settings.adStatusObject.setEnded(true);

            _this.videoCompleteProcessing();
        };

        this.errorEvent = function () {
            /**
             * @see https://developer.mozilla.org/en-US/docs/Web/API/MediaError/code
             */
            var errorCode = 'unknown',
                errorCodes = ['', 'MEDIA_ERR_ABORTED', 'MEDIA_ERR_NETWORK', 'MEDIA_ERR_DECODE', 'MEDIA_ERR_SRC_NOT_SUPPORTED'];
            if (settings.videoDomObject.error.code && errorCodes[settings.videoDomObject.error.code]) {
                errorCode = errorCodes[settings.videoDomObject.error.code]
            }

            if (window.glftSspIsTestEnvironment) {
                alert('QA Debug: Error: ' + errorCode)
            }
        }
    };
</script>


    <script type="application/javascript">
    var VPAIDWrapper = function (VPAIDCreativeObject, options) {
        var _this = this;

        // object settings
        var settings = {
            cornerTimerObject: '',
            adStatusObject: '',
            closeButtonDomObject: '',
            infoButtonDomObject: '',
            displayingInfoButton: '',
            videoStateHandlerObject: '',
            router: '',
            rewardHandlerObject: '',
            adDisplayContainer: '',
            clickparserObject: '',
            closeButtonHandlerObject: '',
            infoButtonHandlerObject: '',
            adjusterObject: '',
            videoDomObject: '',
            videoPlayerObject: '',
            vpaidCleanupCallback: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        // ad switch flag, when switching from this to something else
        var adSwitchFlag = false;

        // total ad duration, calculated on ad start
        var totalAdDuration = 0;

        // current ad time, calculated on time change
        var currentAdTime = 0;

        this._creative = VPAIDCreativeObject;

        // Check ad version
        this.handshakeVersion = function (playerVPAIDVersion) {
            return _this._creative.handshakeVersion(playerVPAIDVersion);
        };

        // Pass through for initAd - when the video player wants to call the ad
        this.initAd = function (width, height, viewMode, desiredBitrate, creativeData, environmentVars) {
            var adVersion = parseInt(this.handshakeVersion('2.0'));

            if (adVersion === 2) {
                var stringCreativeData = creativeData;

                creativeData = {};
                creativeData.AdParameters = stringCreativeData;
            }

            _this._creative.initAd(width, height, viewMode, desiredBitrate, creativeData, environmentVars);
        };

        // Callback for AdPaused
        this.onAdPaused = function () {
            if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                _this._creative.resumeAd();
                return false;
            }

            // track paused
            settings.adStatusObject.trackPaused();

            if (settings.adStatusObject.getEnded() !== true) {
                settings.adStatusObject.setPaused(true);
                settings.videoStateHandlerObject.changePopupState('show');
            } else {
                settings.adStatusObject.setPaused(false);
                settings.videoStateHandlerObject.changePopupState('hide');
            }
        };

        // Callback for AdPlaying
        this.onAdPlaying = function () {
            settings.adStatusObject.trackPlaying();

            if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                settings.adDisplayContainer.style.opacity = 1;
            }

            settings.adStatusObject.setPaused(false);
            settings.videoStateHandlerObject.changePopupState('hide');
        };

        // Callback for AdError
        this.onAdError = function (message) {
            //console.log("onAdError: " + message);

            // call the startAd function that was passed as callback
            // to cleanup and start over using mp4, if it's the case
            if (
                typeof settings.vpaidCleanupCallback !== 'undefined' &&
                settings.vpaidCleanupCallback !== ''
            ) {
                adSwitchFlag = true;

                // try to stop the ad
                _this.stopAd();

                // call the cleanup callback
                settings.vpaidCleanupCallback();
            }
        };

        // Callback for AdLog
        this.onAdLog = function (message) {
            // console.log("onAdLog: " + message);
        };

        // Callback for AdUserAcceptInvitation
        this.onAdUserAcceptInvitation = function () {
            settings.adStatusObject.trackAdUserAcceptInvitation();
        };

        // Callback for AdUserMinimize
        this.onAdUserMinimize = function () {
            settings.adStatusObject.trackAdUserMinimize();
        };

        // Callback for AdUserClose
        this.onAdUserClose = function () {
            settings.adStatusObject.trackAdUserClose();
            settings.router.redirect(settings.adStatusObject.getExitString());
        };

        // Callback for AdUserClose
        this.onAdSkippableStateChange = function () {
            // console.log("Ad Skippable State Changed to: " + _this._creative.getAdSkippableState());
        };

        // Callback for AdExpandedChange
        this.onAdExpandedChange = function () {
            // console.log("Ad Expanded Changed to: " + _this._creative.getAdExpanded());
        };

        // Pass through for getAdExpanded
        this.getAdExpanded = function () {
            return _this._creative.getAdExpanded();
        };

        // Pass through for getAdSkippableState
        this.getAdSkippableState = function () {
            // console.log("getAdSkippableState");
            return _this._creative.getAdSkippableState();
        };

        // Callback for AdSizeChange
        this.onAdSizeChange = function () {
            // console.log("Ad size changed to: w=" + _this._creative.getAdWidth() + " h=" + _this._creative.getAdHeight());
        };

        // Callback for AdDurationChange
        this.onAdDurationChange = function () {
            currentAdTime = _this._creative.getAdDuration();

            if (!isNaN(currentAdTime) && currentAdTime >= 0) {
                settings.adStatusObject.setProgress(totalAdDuration - currentAdTime);
                settings.videoStateHandlerObject.setPlayedTime(settings.adStatusObject.getProgress());
                settings.cornerTimerObject.counterControl(totalAdDuration, currentAdTime);
            }
        };

        // Callback for AdRemainingTimeChange
        this.onAdRemainingTimeChange = function () {
            currentAdTime = _this._creative.getAdRemainingTime();

            if (!isNaN(currentAdTime) && currentAdTime >= 0) {
                settings.adStatusObject.setProgress(totalAdDuration - currentAdTime);
                settings.videoStateHandlerObject.setPlayedTime(settings.adStatusObject.getProgress());
                settings.cornerTimerObject.counterControl(totalAdDuration, currentAdTime);
            }
        };

        // Pass through for getAdRemainingTime
        this.getAdRemainingTime = function () {
            return _this._creative.getAdRemainingTime();
        };

        // Callback for AdImpression
        this.onAdImpression = function () {
            settings.adStatusObject.trackImpression();


                    };

        // Callback for AdClickThru
        this.onAdClickThru = function (url, id, playerHandles) {
            settings.adStatusObject.trackClickthrough();
            if (url && playerHandles && playerHandles == true) {
                if (url.indexOf('//') === 0 && typeof url === 'string' ) {
                    url = 'http:' + url;
                }
                settings.router.redirect('link:' + url);
            }

            if (url && typeof url === 'object') {
                var event = url; // 1st param is actually an event object
                if (event.type === 'AdClickThru' && event.currentTarget) {
                    // Override iframe open functionality to allow us to intercept link opening via javascript
                    event.currentTarget.open = function (clickThru) {
                        settings.router.redirect('link:' + clickThru);
                    }
                }
            }

            return false;
        };

        // Callback for AdInteraction
        this.onAdInteraction = function (id) {
            // console.log("A non-clickthrough event has occured");
        };

        // Callback for AdUserClose
        this.onAdVideoStart = function () {
            settings.adStatusObject.trackAdVideoStart();
        };

        // Callback for AdUserClose
        this.onAdVideoFirstQuartile = function () {
            // trigger fake error (to test vast4 vpaid to mp4 switch
            //_this.onAdError('Time to panic! Aaaaaaaah!');

            settings.adStatusObject.trackAdVideoFirstQuartile();
        };

        // Callback for AdUserClose
        this.onAdVideoMidpoint = function () {
            settings.adStatusObject.trackAdVideoMidpoint();
        };

        // Callback for AdUserClose
        this.onAdVideoThirdQuartile = function () {
            settings.adStatusObject.trackAdVideoThirdQuartile();
        };

        // Callback for AdVideoComplete
        this.onAdVideoComplete = function () {
            settings.adStatusObject.setEnded(true);

            // show close button
            settings.closeButtonHandlerObject.showClose();

            // show info button if applicable
            if (settings.displayingInfoButton && settings.displayingInfoButton === true) {
                settings.infoButtonHandlerObject.showInfo(true);
            }

            settings.cornerTimerObject.counterClean();

            // move advertisment text
            document.getElementById('advertismentLabel').style.right = '';
            document.getElementById('advertismentLabel').style.left = '0px';

            if (settings.rewardHandlerObject.isRewardable() && !settings.adStatusObject.getRewardAttempted()) {
                settings.adStatusObject.setRewardAttempted(true);
                _rewardHandlerObject = settings.rewardHandlerObject;
                setTimeout(
                    function () {
                        _rewardHandlerObject.rewardHandler();
                    },
                    10
                );
            }

            settings.adStatusObject.trackAdVideoComplete();

            if (settings.adStatusObject.getAdMode() === 'mp4') {
                                glftSspVideoCompanionAdsObject.showEndCard();
                            }
        };

        // Callback for AdLinearChange
        this.onAdLinearChange = function () {
            // console.log('Ad linear has changed: ' + _this._creative.getAdLinear())
        };

        // Pass through for getAdLinear
        this.getAdLinear = function () {
            return _this._creative.getAdLinear();
        };

        // Pass through for startAd()
        this.startAd = function () {
            _this._creative.startAd();
        };

        // Callback for AdLoaded
        this.onAdLoaded = function () {
            // Mark ad as having loaded
            settings.adStatusObject.setLoaded(true);

            // Mark video as survey if needed
            if (
                settings.videoDomObject.src &&
                settings.videoDomObject.src.indexOf('blank1x1.mp4') > -1
            ) {
                settings.adStatusObject.setIsSurvey(true);
            }

            // The variable captureOverlay sets the size of the clickable area
            // of a certain element to match viewport's dimensions; width and height respectively.
            // Below the width/height are set via method #setAttribute() and as a property of the object.
            // Note: If only one method is used the ad won't be clickable / redirect will not be
            // performed and this needs further investigation
            // ReferenceAd : rtb:3778:4116745918
            var captureOverlay = document.getElementsByClassName('iv-mouse-capture-overlay');
            var viewportDimensionsCaptureOverlay = settings.adjusterObject.getViewportDimensions();

            if (typeof captureOverlay !== 'undefined' && captureOverlay.length > 0) {
                captureOverlay[0].width = viewportDimensionsCaptureOverlay['width'];
                captureOverlay[0].height = viewportDimensionsCaptureOverlay['height'];
                captureOverlay[0].setAttribute("style", "height:"+captureOverlay[0].height+"; width:"+captureOverlay[0].width);
            }

            document.getElementById('loader_cont').style.display = 'none';
            document.getElementsByTagName('body')[0].removeAttribute('style'); // remove custom styles

            // before ad starts, try to replace WEBM video files with MP4
            settings.videoPlayerObject.correctWebmSource();

            //Excluded autoplay for specific crids
            var creativeArray = ['D2Irx1YdpRd8RyWf2ynC','XATjS03NpVyLuY0IcSCq'];
            var creativeID = vastData['mediaFile']['creative_id'];
            var inArray = false;
            creativeArray.forEach(function(entry) {
              if (creativeID.indexOf(entry) > -1) {
                   inArray = true; return;
                }
            });

            if(inArray === false) {
                _this.startAd();
            }
        };

        // Callback for StartAd()
        this.onStartAd = function () {
            settings.adStatusObject.trackGlotImpression();

            settings.clickparserObject.parseAllIframes(settings.adDisplayContainer);

            if (typeof _this._creative.getAdDuration === 'function' && _this._creative.getAdDuration() > 1) {
                totalAdDuration = _this._creative.getAdDuration();
            } else if (typeof _this._creative.getAdRemainingTime === 'function' && _this._creative.getAdRemainingTime() > 1) {
                totalAdDuration = _this._creative.getAdRemainingTime();
            } else {
                totalAdDuration = settings.adStatusObject.getDuration();
            }

            // initialize corner timer if we have something to count down from
            if (
                !isNaN(totalAdDuration) &&
                totalAdDuration > 0 &&
                !isNaN(currentAdTime) &&
                currentAdTime > 0
            ) {
                settings.cornerTimerObject.counterControl(totalAdDuration, currentAdTime);
            }
        };

        //Pass through for stopAd()
        this.stopAd = function () {
            _this._creative.stopAd();
        };

        // Callback for AdUserClose
        this.onStopAd = function () {
            settings.adStatusObject.trackAdStopped();

            if (!adSwitchFlag) {
                if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                    settings.videoPlayerObject.videoCompleteProcessing();
                }

                settings.closeButtonHandlerObject.showClose();

                // forcibly display the close button despite timer contraints if the ad stopped
                if (settings.displayingInfoButton && settings.displayingInfoButton === true) {
                    settings.infoButtonHandlerObject.showInfo(true);
                }

                settings.cornerTimerObject.counterClean();
            }
        };

        // Callback for AdUserClose
        this.onSkipAd = function () {
            settings.router.redirect(settings.adStatusObject.getExitString());
        };

        //Passthrough for setAdVolume
        this.setAdVolume = function (val) {
            _this._creative.setAdVolume(val);
        };

        //Passthrough for getAdVolume
        this.getAdVolume = function () {
            return creative.getAdVolume();
        };

        // Callback for AdVolumeChange
        this.onAdVolumeChange = function () {
            settings.adStatusObject.trackAdVolumeChange();
        };

        //Passthrough for resizeAd
        this.resizeAd = function (width, height, viewMode) {
            _this._creative.resizeAd();
        };

        //Passthrough for pauseAd()
        this.pauseAd = function () {
            if (settings.adStatusObject.getLoaded() && settings.adStatusObject.getIsSurvey()) {
                return false;
            }

            _this._creative.pauseAd();
        };

        //Passthrough for resumeAd()
        this.resumeAd = function () {
            // track paused
            settings.adStatusObject.trackResumed();
            _this._creative.resumeAd();
            settings.videoStateHandlerObject.changePopupState('hide');
        };

        //Passthrough for expandAd()
        this.expandAd = function () {
            _this._creative.expandAd();
        };

        //Passthrough for collapseAd()
        this.collapseAd = function () {
            _this._creative.collapseAd();
        };

        // This function registers the callbacks of each of the events
        this.setCallbacksForCreative = function () {
            //The key of the object is the event name and the value is a reference to the callback function that is registered with the creative
            var callbacks = {
                AdStarted: _this.onStartAd,
                AdStopped: _this.onStopAd,
                AdSkipped: _this.onSkipAd,
                AdLoaded: _this.onAdLoaded,
                AdLinearChange: _this.onAdLinearChange,
                AdSizeChange: _this.onAdSizeChange,
                AdExpandedChange: _this.onAdExpandedChange,
                AdSkippableStateChange: _this.onAdSkippableStateChange,
                AdDurationChange: _this.onAdDurationChange,
                AdRemainingTimeChange: _this.onAdRemainingTimeChange,
                AdVolumeChange: _this.onAdVolumeChange,
                AdImpression: _this.onAdImpression,
                AdClickThru: _this.onAdClickThru,
                AdInteraction: _this.onAdInteraction,
                AdVideoStart: _this.onAdVideoStart,
                AdVideoFirstQuartile: _this.onAdVideoFirstQuartile,
                AdVideoMidpoint: _this.onAdVideoMidpoint,
                AdVideoThirdQuartile: _this.onAdVideoThirdQuartile,
                AdVideoComplete: _this.onAdVideoComplete,
                AdUserAcceptInvitation: _this.onAdUserAcceptInvitation,
                AdUserMinimize: _this.onAdUserMinimize,
                AdUserClose: _this.onAdUserClose,
                AdPaused: _this.onAdPaused,
                AdPlaying: _this.onAdPlaying,
                AdError: _this.onAdError,
                AdLog: _this.onAdLog
            };

            // Looping through the object and registering each of the callbacks with the creative
            for (var eventName in callbacks) {
                _this._creative.subscribe(callbacks[eventName], eventName, _this);
            }
        };

        _this.setCallbacksForCreative();
    };
</script>

    <script type="text/javascript">
    var glftSspTools = function () {
        // var _this = this;

        this.getClickEvent = function () {
            var event = 'click';

            if (_os) {
                if (_os == 'ios') {
                    event = 'touchend';
                }
            }
            return event;
        };

        this.getUrlWithTimestamp = function (url) {
            // check for collision with existent query params
            if (url.indexOf('cacheBuster=') > -1) {
                return url;
            }

            // domains for which the "cacheBuster" fails to load the video
            var excludedDomains = [
                'http://edt.fp.ps.netease.com',
                'https://gcdn.2mdn.net'
            ];
            for (var i = 0; i < excludedDomains.length; i++) {
                if (url.indexOf(excludedDomains[i]) > -1) {
                    return url;
                }
            }

            var cacheBuster = '?cacheBuster=' + new Date().getTime();
            var cacheBusterUrl;

            // just add the cache buster if no other GET parameters
            if (url.indexOf('?') === -1) {
                cacheBusterUrl = url + cacheBuster;
            } else {
                var queryStringIndex = url.indexOf('?');
                cacheBuster += '&';

                // base URL + cacheBuster + GET params
                cacheBusterUrl = url.substring(0, queryStringIndex) + cacheBuster + url.substring(queryStringIndex + 1);
            }
            return cacheBusterUrl;
        };
    }
</script>

        <script type="text/javascript">
    String.prototype.strLen = function() {
        var len = 0,
            offset;
        for (var i = 0, tmp = this.length; i < tmp; i++) {
            offset = (this.isCHS(i)) ? 2 : 1;
            len += offset;
        }
        return len;
    };

    String.prototype.strToChars = function(){
        var chars = [];
        for (var i = 0, tmp = this.length; i < tmp; i++){
            chars[i] = [this.substr(i, 1), this.isCHS(i)];
        }
        String.prototype.charsArray = chars;
        return chars;
    };

    String.prototype.isCHS = function(i){
        return (this.charCodeAt(i) > 255 || this.charCodeAt(i) < 0);
    };

    String.prototype.subCHString = function(start, end){
        var len = 0,
            str = '',
            offset;
        this.strToChars();
        for (var i = 0, tmp = this.length; i < tmp; i++) {
            offset = (this.charsArray[i][1]) ? 2 : 1;
            len += offset;

            if (end < len) {
                return str;
            } else if (start < len) {
                str += this.charsArray[i][0];
            }
        }
        return str;
    };

    var companionAds = {
        type: false,
        found: false,
        checkCompanionId: false,
        restrictedByCompanionId: false,
        markup: '',
        allowedTypes: [
            'StaticResource',
            'IFrameResource',
            'HTMLResource'
        ],
        StaticResource: {
            align: true,
            anchorParser: false,
            assignTo: 'src',
            domElement: 'img'
        },
        IFrameResource: {
            align: false,
            anchorParser: false,
            assignTo: 'src',
            domElement: 'iframe',
            customCss: {
                height: '100%',
                width: '100%'
            }
        },
        HTMLResource: {
            align: false,
            anchorParser: true,
            assignTo: 'innerHTML',
            domElement: 'div'
        },
        ids: {
            node: 'endCard',
            parent: 'endCardParent'
        },
        dom: {
            node: '',
            parent: ''
        }
    };

    var sspPreloadImages = function (imageUrlArray) {
        if (!sspPreloadImages.list) {
            sspPreloadImages.list = [];
        }
        var list = sspPreloadImages.list;
        for (var i = 0; i < imageUrlArray.length; i++) {
            var img = new Image();
            img.onload = function() {
                var index = list.indexOf(this);
                if (index !== -1) {
                    // remove image from the array once it's loaded
                    // for memory consumption reasons
                    list.splice(index, 1);
                }
            }
            list.push(img);
            img.src = imageUrlArray[i];
        }
    };

    var videoEndCardVariantRendererOne = function () {
        var _this = this;

        var endCardData = {
            // extension data
            'CTA': '',
            'CommentNum': '',
            'HalfStar': '',
            'FullStar': '',
            'StarRating': '',
            'SystemIcon': '',
            'Button': '',
            'PersonIcon': '',

            // ad info
            'AdTitle': '',

            // companion tags data
            'splashUrl': '',
            'splashWidth': '',
            'splashHeight': '',
            'splashIconUrl': '',
            'splashIconWidth': '',
            'splashIconHeight': '',
        };

        var videoEndCardMarkup = '';
        var landscape = false;

        this.getViewportDimensions = function () {
            var viewportWidth;
            var viewportHeight;

            // the more standards compliant browsers (mozilla/opera/IE7) use window.innerWidth and window.innerHeight
            if (typeof window.innerWidth != 'undefined') {
                viewportWidth = window.innerWidth;
                viewportHeight = window.innerHeight;
            }
            // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
            else if (
                typeof document.documentElement != 'undefined' &&
                typeof document.documentElement.clientWidth != 'undefined' &&
                document.documentElement.clientWidth != 0
            ) {
                viewportWidth = document.documentElement.clientWidth;
                viewportHeight = document.documentElement.clientHeight;
            }
            // older versions of IE
            else {
                viewportWidth = document.getElementsByTagName('body')[0].clientWidth;
                viewportHeight = document.getElementsByTagName('body')[0].clientHeight;
            }

            return {
                width: viewportWidth,
                height: viewportHeight
            };
        };

        this.prepareVideoEndCardMarkup = function (receivedVastData) {
            //console.log('receivedVastData[\'companionAds\']: ');
            //console.log(receivedVastData['companionAds']);
            if (receivedVastData['companionAds'].length >= 2) {
                // checking first
                if(receivedVastData['companionAds'][0]['StaticResource']['url']) {
                    endCardData['splashIconUrl'] = receivedVastData['companionAds'][0]['StaticResource']['url'];

                    // get height & width
                    if (
                        receivedVastData['companionAds'][0]['width'] &&
                        receivedVastData['companionAds'][0]['height']
                    ) {
                        endCardData['splashIconWidth'] = receivedVastData['companionAds'][0]['width'];
                        endCardData['splashIconHeight'] = receivedVastData['companionAds'][0]['height'];
                    }
                } else {
                    console.log('Missing splash icon url.)');
                    return false;
                }

                // checking second
                if(receivedVastData['companionAds'][1]['StaticResource']['url']) {
                    endCardData['splashUrl'] = receivedVastData['companionAds'][1]['StaticResource']['url'];

                    // get height & width
                    if (
                        receivedVastData['companionAds'][1]['width'] &&
                        receivedVastData['companionAds'][1]['height']
                    ) {
                        endCardData['splashWidth'] = receivedVastData['companionAds'][1]['width'];
                        endCardData['splashHeight'] = receivedVastData['companionAds'][1]['height'];
                    }
                } else {
                    console.log('Missing splash url.)');
                    return false;
                }
            } else {
                console.log('End card variant expects 2 companion ads. (1 icon, 1 splash)');
                return false;
            }

            // preload companion static resources (cache them)
            sspPreloadImages([endCardData['splashUrl'], endCardData['splashIconUrl']]);

            // set ad title
            endCardData['AdTitle'] = '...';
            if (typeof receivedVastData['adTitleAndRelated'] !== 'undefined') {
                if (typeof receivedVastData['adTitleAndRelated']['AdTitleTruncated10'] !== 'undefined') {
                    endCardData['AdTitle'] = receivedVastData['adTitleAndRelated']['AdTitleTruncated10'];
                } else {
                    if (typeof receivedVastData['adTitleAndRelated']['AdTitle'] !== 'undefined') {
                        endCardData['AdTitle'] = receivedVastData['adTitleAndRelated']['AdTitle'];
                    }
                }

                if (typeof receivedVastData['adTitleAndRelated']['AdTitle'] !== 'undefined') {
                    endCardData['AdTitleFull'] = receivedVastData['adTitleAndRelated']['AdTitle'];
                }
            }

            //console.log(receivedVastData);
            //console.log(receivedVastData['allExtensionsData']);
            if (receivedVastData['allExtensionsData']) {
                for (var allExtensionsDataIndex in receivedVastData['allExtensionsData']) {
                    //console.log('allExtensionDataIndex:' + allExtensionsDataIndex);
                    var allExtensionsDataElement = receivedVastData['allExtensionsData'][allExtensionsDataIndex];
                    //console.log('allExtensionsDataElement: ');
                    //console.log(allExtensionsDataElement);
                    if (
                        allExtensionsDataElement &&
                        allExtensionsDataElement['attributes']['type'] &&
                        allExtensionsDataElement['attributes']['type'] === 'Extra'
                    ) {
                        if (allExtensionsDataElement['children']) {
                            for (var allExtensionsDataElementChildKey in allExtensionsDataElement['children']) {
                                //console.log('allExtensionsDataElementChildKey: ' + allExtensionsDataElementChildKey);
                                switch (allExtensionsDataElementChildKey) {
                                    case 'CTA':
                                    case 'CommentNum':
                                    case 'HalfStar':
                                    case 'FullStar':
                                    case 'StarRating':
                                    case 'SystemIcon':
                                    case 'Button':
                                    case 'PersonIcon':
                                        if (allExtensionsDataElement['children'][allExtensionsDataElementChildKey][0]['value']) {
                                            endCardData[allExtensionsDataElementChildKey] = allExtensionsDataElement['children'][allExtensionsDataElementChildKey][0]['value'];
                                        }
                                        break;
                                }
                            }
                        }
                    }
                }
            }
            // filter comment num
            var CommentNumFiltered = endCardData['CommentNum'].match(/[0-9 , \.]+/g);
            if (CommentNumFiltered) {
                endCardData['CommentNum'] = parseFloat(CommentNumFiltered[0]);
            }
            endCardData['CommentNum'] = endCardData['CommentNum'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            // filter star rating
            var StarRatingFiltered = endCardData['StarRating'].match(/[0-9 , \.]+/g);
            if (StarRatingFiltered) {
                endCardData['StarRating'] = parseFloat(StarRatingFiltered[0]);
            }

            // filter title
            endCardData['CTA'] = endCardData['CTA'].replace(new RegExp('“', 'gi'), '');
            endCardData['CTA'] = endCardData['CTA'].replace(new RegExp('”', 'gi'), '');
            //console.log(endCardData);

            // preload images
            sspPreloadImages([
                endCardData['FullStar'],
                endCardData['HalfStar'],
                endCardData['SystemIcon'],
                endCardData['PersonIcon']
            ]);

            // star rating image string
            var wholeStars = 4;
            var emptyStars = false; // ignore, we don't display empty stars (for now)
            var halfStars = true;
            if (!isNaN(endCardData['StarRating']) && endCardData['StarRating'] > 0) {
                var wholeStartTemp = parseInt(endCardData['StarRating']);
                if (wholeStartTemp > 0 && wholeStartTemp <= 5) {
                    wholeStars = wholeStartTemp;

                    var decimalExists = endCardData['StarRating'] - wholeStartTemp;
                    if (decimalExists) {
                        halfStars = true;
                    } else {
                        halfStars = false;
                    }

                    var remainingStars = 5 - wholeStars;
                }
            }
            var starRatingString = '';
            for (var ij = 1; ij <= wholeStars; ij++) {
                starRatingString = starRatingString + '<img src="' + endCardData['FullStar'] + '" class="endScreenRatingStar" />';
            }
            if (halfStars) {
                starRatingString = starRatingString + '<img src="' + endCardData['HalfStar'] + '" class="endScreenRatingStar" />';
            }
            //console.log('wholeStars: ' + wholeStars);
            //console.log('halfStars: ' + halfStars);


            var viewportDimensions = this.getViewportDimensions();
            //console.log('viewportDimensions: ');
            //console.log(viewportDimensions);
            if (
                viewportDimensions['width'] < viewportDimensions['height']
            ) {
                landscape = false;
            } else {
                landscape = true;
            }

            if (landscape) {
                videoEndCardMarkup = '' +
                    '<div class="endScreenCTOverlay" id="endScreenCTOverlay"></div>' +
                    '    <div id="endScreenTopInternalWrapper" class="endScreenTopInternalWrapper">' +
                    '        <img src="' + endCardData['splashUrl'] + '" id="endScreenSplashImage" class="endScreenSplashImage" />' +
                    '    </div>' +
                    '    <div class="endScreenBottomInternalWrapper" id="endScreenBottomInternalLeftWrapper">' +
                    '        <img src="' + endCardData['splashIconUrl'] + '" id="endScreenSplashImageIcon" class="endScreenSplashImageIcon" />' +
                    '        <div class="endScreenSplashDetails">' +
                    '            <div class="endScreenSplashDetailsContents">' +
                    '                <div class="endScreenSplashTitle" id="endScreenSplashTitle">' +
                    '                    ' + endCardData['AdTitle'] +
                    '                </div>' +
                    '                <div class="endScreenSplashRating" id="endScreenSplashRating">' +
                    '                    ' + starRatingString +
                    '                    <span class="endScreenSplashRatingText">( <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAeCAYAAADU8sWcAAAAAXNSR0IArs4c6QAAArZJREFUSA3Nlk1oE1EQx7tZs35C1UoRCwpVRAQ/DmEJ+aCe9OJBCyoVPNWb4NmDYEWPPffmyasW6UWLX4eYlGACqZCDBwkBAyIYAoGa5tPfC+yyJnnvbSANDQxv9s3M/z8z+zJvjYkhf6lUym61WncMwwh1Op1jhFfQN9FX4/H4h2HgDL/OyWRyut1uv8D/uiyGJDaQe9Fo9IfMx7vvi5xqZyBOUd1Jb7BErwSDwblwOPxNYne3A64mUSA0aPOqT2KBcrjZbK5lMpkDEkh3W0tOu2/jbbsRPhQSPVWr1R7qXLXkANzVgUjs2jg/5Bcl4Mptqj+PmConLTkAB1UACpuZzWb3KuwTWnL+OkUVgMxG3J9QKLQls4t9LTk+b1UACps2TktuWdYKVVQVJH0m/Nu8ruU+Q8+Glty27V+APeiJ0z0uMWo3dU5acgHAuHxJAvdRt1WAouJAILAUi8Weqfwcm6/x6jin0+mz9Xr9Mc83kUPOPus2xOvIcxL96tlXqkORO0j5fN6qVqvnGKNTVFrhXHzXnWwndtesvitPJBJHaOtVTvE11tOsx1mnqKSCLg5lEXnPjfZOHFI/FWrJuU4vcJ0+geAGgMpxKQhJANfOR9anHLwvqiSk5FyJk9xMKwQvACb1U4FjWzdNczESiZQG+Q0EpcWXyPwVpGcGBQ2zB85vZIF/wafeuD5y8Y1Gmz9DrP0Y6AVTPLdIYJ7XsOb1+Y+cimdx2oB42us0Ch3cLeSKdw64Ew7CAMbXO0EskhedRN4wI9zh5JLT7kWMl0dRpQwD/BPlcvmRY++2vVAo7CuVSkWMI2+3Q+SsdPcvE3FWzIJu5RCL4bHjxCIBePY3Go1bQnfaPi8exvUjgS6fQz43LmLBA3kMMcUsNPg2r7Fa40yAdz+zJ5fLTUL8c5zEggvyo/8AXvQP4tye2zEAAAAASUVORK5CYII=" class="endScreenRatingPersonIcon" /> ' + endCardData['CommentNum'] + ' )</span>' +
                    '                </div>' +
                    '            </div>' +
                    '        </div>' +
                    '        <div class="endScreenSplashImageCTWrapperTable">' +
                    '            <div class="endScreenSplashImageCTWrapperTableRow">' +
                    '                <div class="endScreenSplashImageCTButton" id="endScreenSplashImageCTButton">' + endCardData['CTA'] + '</div><br/>' +
                    '                <img src="' + endCardData['SystemIcon'] + '" class="endScreenPartnerLogo" />' +
                    '            </div>' +
                    '        </div>' +
                    '    </div>' +
                    '<style type="text/css">' +
                    '    .endScreenCTOverlay {' +
                    '        z-index: 55;' +
                    '        position: absolute;' +
                    '        width: 100%;' +
                    '        height: 100%;' +
                    '        left: 0;' +
                    '        top: 0;' +
                    '        bottom: 0;' +
                    '        right: 0;' +
                    '    }' +
                    '' +
                    '    .endScreenRatingStar {' +
                    '        width: 1em;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '' +
                    '    .endScreenRatingPersonIcon {' +
                    '        width: 0.8em;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashRatingText {' +
                    '        vertical-align: middle;' +
                    '        font-size: 0.7em;' +
                    '        color: grey;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageCTWrapperTable {' +
                    '        display: table;' +
                    '        position: relative;' +
                    '        float: right;' +
                    '        height: 76%;' +
                    '        top: 12%;' +
                    '        right: 2%;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageCTWrapperTableRow {' +
                    '        display: table-cell;' +
                    '        vertical-align: middle;' +
                    '        text-align: right;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageCTButton {' +
                    '        display: inline-block;' +
                    '        text-align: center;' +
                    '        font-size: 3em;' +
                    '        border-radius: 8px;' +
                    '        padding: 8px 35px;' +
                    '        margin-bottom: 5px;' +
                    '        background: linear-gradient(to right, #79BF2B, #74BD2D, #62B83B, #40B252, #3CAD5D);' +
                    '        box-shadow:  6px 6px 16px 1px #ccc;' +
                    '    }' +
                    '' +
                    '    .endScreenPartnerLogo {' +
                    '        height: 15%;' +
                    '    }' +
                    '' +
                    '    .endScreenTopWrapper {' +
                    '        position: absolute;' +
                    '        border: 0px solid red;' +
                    '        background-color: transparent;' +
                    '        width: 500px;' +
                    '        height: 250px;' +
                    '        z-index: 5;' +
                    '    }' +
                    '' +
                    '    .endScreenTopInternalWrapper {' +
                    '        border: 0px solid blue;' +
                    '        background-color: black;' +
                    '        opacity: 1;' +
                    '        width: 100%;' +
                    '        height: 75%;' +
                    '        overflow: hidden;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImage {' +
                    '        position: relative;' +
                    '        border-radius: 15px;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageIcon {' +
                    '        display: block;' +
                    '        position: relative;' +
                    '        float: left;' +
                    '        top: 12%;' +
                    '        left: 3%;' +
                    '        border-radius: 15px;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashDetails {' +
                    '        display: table;' +
                    '        height: 76%;' +
                    '        position: relative;' +
                    '        float: left;' +
                    '        overflow: hidden;' +
                    '        left: 5%;' +
                    '        top: 12%;' +
                    '        bottom: 12%;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashDetailsContents {' +
                    '        display: table-cell;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashTitle {' +
                    '        display: block;' +
                    '        position: relative;' +
                    '        color: black;' +
                    '        font-size: 3em;' +
                    '        margin-bottom: 2%;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashRating {' +
                    '        display: block;' +
                    '        position: relative;' +
                    '        color: black;' +
                    '        font-size: 2.5em;' +
                    '    }' +
                    '' +
                    '    .endScreenBottomInternalWrapper {' +
                    '        display: table-cell;' +
                    '        position: absolute;' +
                    '        text-wrap: none;' +
                    '        overflow: hidden;' +
                    '        left: 0;' +
                    '        bottom: 0;' +
                    '        background-color: white;' +
                    '        top: 75%;' +
                    '        width: 100%;' +
                    '        height: 25%;' +
                    '    }' +
                    '</style>';
            } else {
                videoEndCardMarkup = '' +
                    '    <div class="endScreenCTOverlay" id="endScreenCTOverlay"></div>' +
                    '    <div id="endScreenTopInternalWrapper" class="endScreenTopInternalWrapper">' +
                    '        <img src="' + endCardData['splashUrl'] + '" id="endScreenSplashImage" class="endScreenSplashImage" />' +
                    '    </div>' +
                    '    <div id="endScreenMiddleInternalWrapper" class="endScreenMiddleInternalWrapper">' +
                    '        <div class="endScreenMiddleInternalTopSlice">' +
                    '        </div>' +
                    '        <img src="' + endCardData['splashIconUrl'] + '" id="endScreenSplashImageIcon" class="endScreenSplashImageIcon" />' +
                    '        <div class="endScreenMiddleInternalBottomSlice">' +
                    '        </div>' +
                    '    </div>' +
                    '    <div id="endScreenBottomInternalWrapper" class="endScreenBottomInternalWrapper">' +
                    '        <div class="endScreenBottomInternalTable">' +
                    '            <div class="endScreenBottomInternalRow">' +
                    '                <div class="endScreenBottomInternalCell endScreenBottomInternalCellTop">' +
                    '                    <div class="endScreenSplashTitle" id="endScreenSplashTitle">' +
                    '                        ' + endCardData['AdTitle'] +
                    '                    </div>' +
                    '                    <div class="endScreenSplashRating" id="endScreenSplashRating">' +
                    '                        ' +  starRatingString +
                    '                        <span class="endScreenSplashRatingText">( <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAeCAYAAADU8sWcAAAAAXNSR0IArs4c6QAAArZJREFUSA3Nlk1oE1EQx7tZs35C1UoRCwpVRAQ/DmEJ+aCe9OJBCyoVPNWb4NmDYEWPPffmyasW6UWLX4eYlGACqZCDBwkBAyIYAoGa5tPfC+yyJnnvbSANDQxv9s3M/z8z+zJvjYkhf6lUym61WncMwwh1Op1jhFfQN9FX4/H4h2HgDL/OyWRyut1uv8D/uiyGJDaQe9Fo9IfMx7vvi5xqZyBOUd1Jb7BErwSDwblwOPxNYne3A64mUSA0aPOqT2KBcrjZbK5lMpkDEkh3W0tOu2/jbbsRPhQSPVWr1R7qXLXkANzVgUjs2jg/5Bcl4Mptqj+PmConLTkAB1UACpuZzWb3KuwTWnL+OkUVgMxG3J9QKLQls4t9LTk+b1UACps2TktuWdYKVVQVJH0m/Nu8ruU+Q8+Glty27V+APeiJ0z0uMWo3dU5acgHAuHxJAvdRt1WAouJAILAUi8Weqfwcm6/x6jin0+mz9Xr9Mc83kUPOPus2xOvIcxL96tlXqkORO0j5fN6qVqvnGKNTVFrhXHzXnWwndtesvitPJBJHaOtVTvE11tOsx1mnqKSCLg5lEXnPjfZOHFI/FWrJuU4vcJ0+geAGgMpxKQhJANfOR9anHLwvqiSk5FyJk9xMKwQvACb1U4FjWzdNczESiZQG+Q0EpcWXyPwVpGcGBQ2zB85vZIF/wafeuD5y8Y1Gmz9DrP0Y6AVTPLdIYJ7XsOb1+Y+cimdx2oB42us0Ch3cLeSKdw64Ew7CAMbXO0EskhedRN4wI9zh5JLT7kWMl0dRpQwD/BPlcvmRY++2vVAo7CuVSkWMI2+3Q+SsdPcvE3FWzIJu5RCL4bHjxCIBePY3Go1bQnfaPi8exvUjgS6fQz43LmLBA3kMMcUsNPg2r7Fa40yAdz+zJ5fLTUL8c5zEggvyo/8AXvQP4tye2zEAAAAASUVORK5CYII=" class="endScreenRatingPersonIcon" /> 12,485 )</span>' +
                    '                    </div>' +
                    '                </div>' +
                    '            </div>' +
                    '            <div class="endScreenBottomInternalRow">' +
                    '                <div class="endScreenBottomInternalCell endScreenBottomInternalCellBottom">' +
                    '                    <div class="endScreenCtSectionWrapper">' +
                    '                        <div class="endScreenSplashImageCTButton" id="endScreenSplashImageCTButton">' + endCardData['CTA'] + '</div><br/>' +
                    '                        <img src="' + endCardData['SystemIcon'] + '" class="endScreenPartnerLogo" />' +
                    '                    </div>' +
                    '                </div>' +
                    '            </div>' +
                    '        </div>' +
                    '    </div>' +
                    '<style type="text/css">' +
                    '   .endScreenCTOverlay {' +
                    '        z-index: 55;' +
                    '        position: absolute;' +
                    '        width: 100%;' +
                    '        height: 100%;' +
                    '        left: 0;' +
                    '        top: 0;' +
                    '        bottom: 0;' +
                    '        right: 0;' +
                    '    }' +
                    '    .endScreenBottomInternalTable {' +
                    '        display: table;' +
                    '        width: 100%;' +
                    '        height: 100%;' +
                    '    }' +
                    '    .endScreenBottomInternalRow {' +
                    '        display: table-row;' +
                    '    }' +
                    '    .endScreenBottomInternalCell {' +
                    '        display: table-cell;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '    .endScreenBottomInternalCellTop  {' +
                    '        vertical-align: top !important;' +
                    '        height: 25%;' +
                    '    }' +
                    '' +
                    '    .endScreenRatingStar {' +
                    '        width: 0.8em;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '' +
                    '    .endScreenRatingPersonIcon {' +
                    '        width: 0.8em;' +
                    '        vertical-align: middle;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashRatingText {' +
                    '        vertical-align: middle;' +
                    '        font-size: 0.7em;' +
                    '        color: grey;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageCTButton {' +
                    '        display: inline-block;' +
                    '        text-align: center;' +
                    '        font-size: 6em;' +
                    '        border-radius: 8px;' +
                    '        padding: 8px 35px;' +
                    '        margin-bottom: 5px;' +
                    '        background: linear-gradient(to right, #79BF2B, #74BD2D, #62B83B, #40B252, #3CAD5D);' +
                    '        box-shadow:  6px 6px 16px 1px #ccc;' +
                    '    }' +
                    '' +
                    '    .endScreenPartnerLogo {' +
                    '        height: 3.5em;' +
                    '    }' +
                    '' +
                    '    .endScreenTopWrapper {' +
                    '        position: absolute;' +
                    '        border: 0px solid red;' +
                    '        background-color: transparent;' +
                    '        width: 500px;' +
                    '        height: 250px;' +
                    '        z-index: 5;' +
                    '    }' +
                    '' +
                    '    .endScreenTopInternalWrapper {' +
                    '        border: 0px solid blue;' +
                    '        background-color: black;' +
                    '        opacity: 1;' +
                    '        width: 100%;' +
                    '        height: 42%;' +
                    '        overflow: hidden;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImage {' +
                    '        display: inline-block;' +
                    '        position: relative;' +
                    '        border-radius: 15px;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashImageIcon {' +
                    '        display: block;' +
                    '        position: absolute;' +
                    '        border-radius: 15px;' +
                    '        z-index: 999999;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashTitle {' +
                    '        display: block;' +
                    '        position: relative;' +
                    '        color: black;' +
                    '        font-size: 6.5em;' +
                    '        margin-top: 0.5%;' +
                    '        margin-bottom: 0.5%;' +
                    '    }' +
                    '' +
                    '    .endScreenSplashRating {' +
                    '        display: block;' +
                    '        position: relative;' +
                    '        color: black;' +
                    '        font-size: 5em;' +
                    '    }' +
                    '' +
                    '    .endScreenMiddleInternalWrapper {' +
                    '        position: relative;' +
                    '        width: 100%;' +
                    '        height: 16%;' +
                    '    }' +
                    '' +
                    '    .endScreenMiddleInternalTopSlice {' +
                    '        position: relative;' +
                    '        background-color: black;' +
                    '        top: 0;' +
                    '        left: 0;' +
                    '        width: 100%;' +
                    '        height: 50%;' +
                    '    }' +
                    '    .endScreenMiddleInternalBottomSlice {' +
                    '        position: relative;' +
                    '        background-color: white;' +
                    '        bottom: 0;' +
                    '        left: 0;' +
                    '        width: 100%;' +
                    '        height: 50%;' +
                    '    }' +
                    '' +
                    '    .endScreenBottomInternalWrapper {' +
                    '        position: absolute;' +
                    '        width: 100%;' +
                    '        height: 42%;' +
                    '        background-color: white;' +
                    '        text-wrap: none;' +
                    '        overflow: hidden;' +
                    '        text-align: center;' +
                    '    }' +
                    '' +
                    '    .endScreenCtSectionWrapper {' +
                    '        position: relative;' +
                    '    }' +
                    '</style>';
            }

            return true;
        };

        this.videoEndCardAdd = function (receivedSettings) {
            // append html markup (html&css)
            var parent = document.createElement('div');
            parent.id = 'endScreenTopWrapper';
            parent.className = 'endScreenTopWrapper';

            document.body.appendChild(parent);

            var insertedParent = document.getElementById('endScreenTopWrapper');

            insertedParent.innerHTML = videoEndCardMarkup;

            var unicodeToChar = function (text, limit) {
                var finalText = text.replace(/\\u[\dA-F]{4}/gi,
                    function (match) {
                        return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
                    });

                if (limit) {
                    finalText = finalText.subCHString(0, 10) + '...';
                }

                return finalText;
            }

            document.getElementById('endScreenSplashImageCTButton').innerHTML = unicodeToChar(endCardData['CTA']);
            document.getElementById('endScreenSplashTitle').innerHTML = unicodeToChar(endCardData['AdTitleFull'], 10);

            // execute specific JS
            document.getElementById('endScreenCTOverlay').addEventListener('click', function () {
                var _receivedSettings = receivedSettings;
                var insertedParentTemp = document.getElementById('endScreenTopWrapper');
                if (
                    insertedParentTemp &&
                    typeof insertedParentTemp.dataset.cttracking === 'undefined' ||
                    insertedParentTemp.dataset.cttracking !== 'done'
                ) {
                    insertedParentTemp.dataset.cttracking = 'done';

                    if (typeof _receivedSettings.vastData['companionAds'][1]['clickthroughTracking'] !== 'undefined') {
                        for (var i in _receivedSettings.vastData['companionAds'][1]['clickthroughTracking']) {
                            _receivedSettings.tracker.track(_receivedSettings.vastData['companionAds'][1]['clickthroughTracking'][i]);
                        }
                    }

                    _receivedSettings.adStatusObject.trackClickthrough();
                }

                if (typeof _receivedSettings.vastData['companionAds'][1]['clickthrough'] !== 'undefined') {
                    _receivedSettings.router.redirect('link:' + _receivedSettings.vastData['companionAds'][1]['clickthrough']);
                } else if (
                    typeof _receivedSettings.vastData['clickThrough'][0] !== 'undefined' &&
                    _receivedSettings.vastData['clickThrough'][0] !== null &&
                    _receivedSettings.vastData['clickThrough'][0] !== ''
                ) {
                    // only fallback if settings allow it
                    if (
                        _receivedSettings.companionAdClickthroughFallback === 'yes' &&
                        typeof _receivedSettings.vastData['companionAds'][1]['StaticResource'] !== 'undefined'
                    ) {
                        _receivedSettings.router.redirect('link:' + _receivedSettings.vastData['clickThrough'][0]);

                        // attempt to track this again, since if we don't have clickthrough
                        // in the companion ad we might not have companion ad clickthrough tracking either
                        _receivedSettings.adStatusObject.trackClickthrough();
                    }
                }
            });

            var endScreenSplashImageHeight = document.getElementById('endScreenSplashImage').height;
            var endScreenSplashImageWidth = document.getElementById('endScreenSplashImage').width;
            var endScreenSplashImageDynamicSizeCalculation = true;
            if (
                typeof endCardData['splashWidth'] !== 'undefined' &&
                !isNaN(endCardData['splashWidth']) && endCardData['splashWidth'] > 0 &&
                typeof endCardData['splashHeight'] !== 'undefined' &&
                !isNaN(endCardData['splashHeight']) && endCardData['splashHeight']
            ) {
                endScreenSplashImageHeight = endCardData['splashHeight'];
                endScreenSplashImageWidth = endCardData['splashWidth'];
                endScreenSplashImageDynamicSizeCalculation = false;
            }

            var endScreenSplashImageIconHeight = document.getElementById('endScreenSplashImageIcon').height;
            var endScreenSplashImageIconWidth = document.getElementById('endScreenSplashImageIcon').width;
            var endScreenSplashImageIconDynamicSizeCalculation = true;
            if (
                typeof endCardData['splashIconWidth'] !== 'undefined' &&
                !isNaN(endCardData['splashIconWidth']) && endCardData['splashIconWidth'] > 0 &&
                typeof endCardData['splashIconHeight'] !== 'undefined' &&
                !isNaN(endCardData['splashIconHeight']) && endCardData['splashIconHeight']
            ) {
                endScreenSplashImageIconHeight = endCardData['splashIconHeight'];
                endScreenSplashImageIconWidth = endCardData['splashIconWidth'];
                endScreenSplashImageIconDynamicSizeCalculation = false;
            }
            if (landscape) {
                var glftSplashAjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenTopWrapper'),
                    adjustableElementHeight: document.getElementById('endScreenTopWrapper').height,
                    adjustableElementWidth: document.getElementById('endScreenTopWrapper').width,
                    viewportPercentile: 1,
                    ignoreRatio: true
                });
                glftSplashAjusterObject.adjustElement(true);

                var glftSplashImageAdjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenSplashImage'),
                    adjustableElementReferenceObj: document.getElementById('endScreenTopInternalWrapper'),
                    adjustableElementHeight: endScreenSplashImageHeight,
                    adjustableElementWidth: endScreenSplashImageWidth,
                    ignoreRatio: false,
                    viewportPercentile: 0.92
                });
                glftSplashImageAdjusterObject.adjustElement(endScreenSplashImageDynamicSizeCalculation);

                var glftSplashImageIconAdjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenSplashImageIcon'),
                    adjustableElementReferenceObj: document.getElementById('endScreenBottomInternalLeftWrapper'),
                    adjustableElementHeight: endScreenSplashImageIconHeight,
                    adjustableElementWidth: endScreenSplashImageIconWidth,
                    ignoreRatio: false,
                    viewportPercentile: 0.78,
                    centerAdjustableElement: false
                });
                glftSplashImageIconAdjusterObject.adjustElement(endScreenSplashImageIconDynamicSizeCalculation);

            } else {

                var glftSplashAjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenTopWrapper'),
                    adjustableElementHeight: document.getElementById('endScreenTopWrapper').height,
                    adjustableElementWidth: document.getElementById('endScreenTopWrapper').width,
                    viewportPercentile: 1,
                    ignoreRatio: true,
                });
                glftSplashAjusterObject.adjustElement(true);

                var glftSplashImageAdjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenSplashImage'),
                    adjustableElementReferenceObj: document.getElementById('endScreenTopInternalWrapper'),
                    adjustableElementHeight: endScreenSplashImageHeight,
                    adjustableElementWidth: endScreenSplashImageWidth,
                    ignoreRatio: false,
                    viewportPercentile: 0.9

                });
                glftSplashImageAdjusterObject.adjustElement(endScreenSplashImageDynamicSizeCalculation);

                var glftSplashImageIconAdjusterObject = new glftSspAdjuster({
                    adjustableElementObj: document.getElementById('endScreenSplashImageIcon'),
                    adjustableElementReferenceObj: document.getElementById('endScreenMiddleInternalWrapper'),
                    adjustableElementHeight: document.getElementById('endScreenSplashImageIcon').height,
                    adjustableElementWidth: document.getElementById('endScreenSplashImageIcon').width,
                    ignoreRatio: false,
                    viewportPercentile: 1,
                    centerAdjustableElement: true,
                    adjustVertical: true,
                    adjustHorizontal: true
                });
                glftSplashImageIconAdjusterObject.adjustElement(true);

            }

            var advLabel = document.getElementById('advertismentLabel');
            advLabel.style.fontSize  = '1.4em';
            advLabel.style.left = '0px';
            advLabel.style.top = '0px';
            advLabel.style.bottom = 'auto';
            advLabel.style.right = 'auto';

            var advLabelShiftLayer = document.getElementById('advertismentLabelShiftLayer');
            advLabelShiftLayer.style.marginTop = '10px';
            advLabelShiftLayer.style.marginLeft = '9px';
            advLabelShiftLayer.style.marginBottom = '0px';
            advLabelShiftLayer.style.marginRight = '0px';

            var advLabelIcon = document.getElementById('advertismentLabelIcon');
            advLabelIcon.style.width = '1.2em';

            // track impression if present
            if (typeof receivedSettings.vastData['companionAds'][1]['trackingEvents'] !== 'undefined') {
                // creative view track (impression)
                if (typeof receivedSettings.vastData['companionAds'][1]['trackingEvents']['creativeView'] !== 'undefined') {
                    for (var j in receivedSettings.vastData['companionAds'][1]['trackingEvents']['creativeView']) {
                        receivedSettings.tracker.track(receivedSettings.vastData['companionAds'][1]['trackingEvents']['creativeView'][j]);
                    }
                }
            }
        };
    };

    var videoEndCardVariantRenderers = {
        '1': videoEndCardVariantRendererOne
    }

    var videoEndCardVariantRendererFactory = function () {
        this.createEndCardVariantRenderer = function (rendererVariant) {
            if (
                rendererVariant &&
                rendererVariant != '' &&
                typeof videoEndCardVariantRenderers[rendererVariant] !== 'undefined'
            ) {
                return new videoEndCardVariantRenderers[rendererVariant]();
            }

            return false;
        };
    };


    var glftSspVideoCompanionAds = function (options) {
        var _this = this;

        var settings = {
            videoDomObject: '',
            tracker: '',
            router: '',
            toolsObject: '',
            byCompanionId: '',
            companionAdClickthroughFallback: 'no',
            vastData: '',
            adStatusObject: {},
            companionAdsRenderVariant: 0, // default 0, typical algorithm
            videoEndCardVariantRenderer: false
        };
        for (var key in options) {
            settings[key] = options[key];
        }

        this.setOptions = function (optionsToSet) {
            for (var key in optionsToSet) {
                settings[key] = optionsToSet[key];
            }
        };

        this.init = function () {
            // check companion ads existence
            if (typeof settings.vastData['companionAds'] == 'undefined') {
                return false;
            }

            // check companion id existence
            companionAds.checkCompanionId = typeof settings.byCompanionId != 'undefined' && settings.byCompanionId != '';

            if (settings.companionAdsRenderVariant !== 0) {
                var videoEndCardVariantRenderer = this.getCustomVariantRenderer();
                companionAds.found = videoEndCardVariantRenderer.prepareVideoEndCardMarkup(settings.vastData);
            } else {
                for (var j in settings.vastData['companionAds']) {
                    if (companionAds.checkCompanionId) {

                        companionAds.restrictedByCompanionId = typeof settings.vastData['companionAds'][j]['id'] == 'undefined' ||
                            settings.vastData['companionAds'][j]['id'] != settings.byCompanionId;
                    }

                    // fetch the first resource companion
                    if (companionAds.restrictedByCompanionId || companionAds.found) {
                        break;
                    }

                    // possible values for the moment: IFrameResource && StaticResource
                    // HTMLResource needs an HTML parser
                    for (var i in companionAds.allowedTypes) {
                        if (typeof settings.vastData['companionAds'][j][companionAds.allowedTypes[i]] != 'undefined') {
                            companionAds.found = true;
                            companionAds.markup = settings.vastData['companionAds'][j];
                            companionAds.type = companionAds.allowedTypes[i];

                            if (
                                companionAds.markup[companionAds.type] !== 'undefined' &&
                                companionAds.markup[companionAds.type]['url'] !== 'undefined'
                            ) {
                                companionAds.url = companionAds.markup[companionAds.type]['url'];
                            }

                            break;
                        }
                    }
                }
            }

            if (!companionAds.found) {
                return;
            }

            // default: stop more info button from ever displaying
            // forceMoreInfoButton: allow button display regardless of companion
            if (settings.adStatusObject.getForceMoreInfoButton() === false) {
                settings.adStatusObject.setMoreInfoButtonDisabled(true);
            }
        };

        this.createEndCard = function (companionObject) {
            if (!companionAds.found) {
                return;
            }

            if (!companionObject) {
                return;
            }

            // create end card
            var node = document.createElement(companionObject.domElement);
            node.id = companionAds.ids.node;
            node[companionObject.assignTo] = companionAds.markup[companionAds.type][Object.keys(companionAds.markup[companionAds.type])[0]];

            if (companionObject.anchorParser) {
                try {
                    settings.clickparserObject.iframeAnchorParser(window);
                } catch (err) {
                }
            }

            node.style.border = 'none';
            node.style.position = 'absolute';
            node.style.left = 0;
            node.style.top = 0;
            node.style.zIndex = 5;

            node.style.width = '100%'; // companionAds.markup.width + 'px';
            node.style.height = '100%'; // companionAds.markup.height + 'px';

            // add custom css properties to the end card
            // these props are defined above, for each supported end card
            if (companionObject.customCss) {
                for (var cssProperty in companionObject.customCss) {
                    if (cssProperty in document.body.style) {
                        node.style[cssProperty] = companionObject.customCss[cssProperty];
                    }
                }
            }

            var parent = document.createElement('div');
            parent.id = companionAds.ids.parent;
            parent.style.width = '100%';
            parent.style.height = '100%';
            parent.style.position = 'absolute';
            parent.style.left = 0;
            parent.style.top = 0;
            parent.style.zIndex = 5;

            // appending end card
            document.body.appendChild(parent);
            parent.appendChild(node);

            // save end card to companionAds object
            companionAds.dom.node = node;
            companionAds.dom.parent = parent;

            // add click tracking & clickthrough
            companionAds.dom.parent.addEventListener('click', function () {
                if (
                        typeof companionAds.dom.parent.dataset.cttracking === 'undefined' ||
                        companionAds.dom.parent.dataset.cttracking !== 'done'
                ) {
                    companionAds.dom.parent.dataset.cttracking = 'done';

                    if (typeof companionAds.markup['clickthroughTracking'] !== 'undefined') {
                        for (var i in companionAds.markup['clickthroughTracking']) {
                            settings.tracker.track(companionAds.markup['clickthroughTracking'][i]);
                        }
                    }

                    settings.adStatusObject.trackClickthrough();
                }

                if (typeof companionAds.markup['clickthrough'] !== 'undefined') {
                    settings.router.redirect('link:' + companionAds.markup['clickthrough']);
                } else if (
                    typeof settings.vastData['clickThrough'][0] !== 'undefined' &&
                    settings.vastData['clickThrough'][0] !== null &&
                    settings.vastData['clickThrough'][0] !== ''
                ) {
                    // only fallback if settings allow it
                    if (
                        settings.companionAdClickthroughFallback === 'yes' &&
                        companionAds.type === 'StaticResource'
                    ) {
                        settings.router.redirect('link:' + settings.vastData['clickThrough'][0]);

                        // attempt to track this again, since if we don't have clickthrough
                        // in the companion ad we might not have companion ad clickthrough tracking either
                        settings.adStatusObject.trackClickthrough();
                    }
                }
            });

            // track impression if present
            if (typeof companionAds.markup['trackingEvents'] !== 'undefined') {
                // creative view track (impression)
                if (typeof companionAds.markup['trackingEvents']['creativeView'] !== 'undefined') {
                    for (var j in companionAds.markup['trackingEvents']['creativeView']) {
                        settings.tracker.track(companionAds.markup['trackingEvents']['creativeView'][j]);
                    }
                }
            }

            // specific fixes
            if (document.getElementById('imgWrapper') !== null) {
                document.getElementById('imgWrapper').style.width = '100%';
                document.getElementById('imgWrapper').style.height = '100%';
                document.getElementById('imgWrapper').style.backgroundSize = 'cover';
            }
        };

        this.alignEndCard = function (companionObject) {
            if (!companionAds.found) {
                return;
            }

            // adjust end card only for supported types
            if (companionObject.align) {
                try {
                    var glftSspAdjusterObject = new glftSspAdjuster({
                        adjustableElementObj: companionAds.dom.node,
                        adjustableElementHeight: companionAds.dom.node.scrollHeight,
                        adjustableElementWidth: companionAds.dom.node.scrollWidth,
                        viewportPercentile: 1,
                        refreshElementSize: true
                    });
                    glftSspAdjusterObject.alignElement();
                } catch (err) {
                }

                // fade out other visible elements
                var opacity = 1;
                (function fadeOut () {
                    if (opacity > .30) {
                        opacity -= .075;
                        setTimeout(fadeOut, 50);
                    }
                    settings.videoDomObject.style.opacity = opacity;
                })();
            }
        };

        this.showEndCard = function () {
            if (!companionAds.found) {
                return;
            }

            if (settings.companionAdsRenderVariant !== 0) {
                _this.showEndCardUsingCustomVariant();
            } else {
                var companionObject = companionAds[companionAds.type];
                _this.createEndCard(companionObject);
                _this.alignEndCard(companionObject);
            }

        };

        this.getCustomVariantRenderer = function () {
            if (typeof settings.videoEndCardVariantRenderer === 'object') {
                return settings.videoEndCardVariantRenderer;
            }

            // instantiate variant factory
            var videoEndCardVariantRendererFactoryObj = new videoEndCardVariantRendererFactory();

            // get renderer
            var videoEndCardVariantRenderer = videoEndCardVariantRendererFactoryObj.createEndCardVariantRenderer(settings.companionAdsRenderVariant);
            if (typeof videoEndCardVariantRenderer === 'object') {
                //console.log('videoEndCardVariantRenderer instantiated.');
                settings.videoEndCardVariantRenderer = videoEndCardVariantRenderer;
            }

            return settings.videoEndCardVariantRenderer;
        };

        this.showEndCardUsingCustomVariant = function () {
            var endCardRenderResult = false;

            var videoEndCardVariantRenderer = this.getCustomVariantRenderer();
            if (videoEndCardVariantRenderer !== false) {
                //console.log('videoEndCardVariantRenderer: ' + videoEndCardVariantRenderer);
                endCardRenderResult = videoEndCardVariantRenderer.videoEndCardAdd(settings);
            }

            if (endCardRenderResult === false) {
                console.log('End card render failed.');
                return false;
            }

            console.log('End card render successful.');
            return true;
        };
    };
</script>


    <script type="application/javascript">
    var glftSspIHttp = {
        iReq: function () {
            if (window.XMLHttpRequest) {
                return new XMLHttpRequest()
            } else {
                if (window.ActiveXObject) {
                    return new ActiveXObject("Microsoft.XMLHTTP")
                }
            }
            return false
        },
        async: true,
        call: function (a) {
            this.request = this.iReq();
            if (this.request) {
                this.request.open("GET", a, this.async);
                this.request.send()
            }
        }, post: function (a, b) {
            this.request = this.iReq();
            if (this.request) {
                this.request.open("POST", a, this.async);
                this.request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                this.request.send(b)
            }
        }
    };

    var glftSspIHttpReturn = {
        iReq: function () {
            if (window.XMLHttpRequest) {
                return new XMLHttpRequest()
            }
            else {
                if (window.ActiveXObject) {
                    return new ActiveXObject("Microsoft.XMLHTTP")
                }
            }
            return false
        },
        async: true,
        call: function (a, callback) {
            this.request = this.iReq();
            if (this.request) {
                if (typeof callback !== 'undefined' && callback !== null) {
                    callback(this);
                }
                this.request.open("GET", a, this.async);
                this.request.send()
            }
        },
        post: function (a, b) {
            this.request = this.iReq();
            if (this.request) {
                this.request.open("POST", a, this.async);
                this.request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                this.request.send(b)
            }
        }
    };

    var glftSspTracker = {
        track: function (trackingUrl) {
            try {
                glftSspIHttp.call(trackingUrl);
                glftSspIHttp.request.timeout = 4000;

                if (glftSspIHttp.request.readyState === 4) {
                    // do something?
                }
            } catch (e) {
            }
        }
    };
</script>
    {[gl_tracking_js]}
    {[config_setup_js]}


    <script type="application/javascript">
    var glftSspAdStatus = function (options) {
        var _this = this;

        var settings = {
            vastData: '',
            redirectionCache: '',
            glftSspTracker: '',
            glftSspRouter: '',
            gladsTrackingUrls: '',
            gladsImpressionTrackingUrl: '',
            gladsClickTrackingUrl: '',
            partnerImpressionTrackingUrls: '',
            gladsGlotTrackingVideoCompleteUrl: '',
            sspClickUrl: '',
            gladsGlotTrackingImpressionUrl: '',
            videoStateHandlerObject: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        var forceMoreInfoButton = false;
        this.getForceMoreInfoButton = function () {
            return forceMoreInfoButton;
        };
        this.setForceMoreInfoButton = function (newForceMoreInfoButton) {
            forceMoreInfoButton = newForceMoreInfoButton;
        };

        var moreInfoButtonDisabled = false;
        this.getMoreInfoButtonDisabled = function () {
            return moreInfoButtonDisabled;
        };
        this.setMoreInfoButtonDisabled = function (newMoreInfoButtonDisabled) {
            moreInfoButtonDisabled = newMoreInfoButtonDisabled;
        };

        var isSurvey = false;
        this.getIsSurvey = function () {
            return isSurvey;
        };
        this.setIsSurvey = function (newIsSurvey) {
            isSurvey = newIsSurvey;
        };

        var adMode = 'mp4'; // current vpaid or mp4
                            // for vpaid/mp4 it can be vpaid or mp4 if vpaid failed
        this.getAdMode = function () {
            return adMode;
        };
        this.setAdMode = function (newAdModeValue) {
            adMode = newAdModeValue;
        };

        var videoContentType = ''; // vpaid, mp4, vpaid/mp4
        this.getVideoContentType = function () {
            return videoContentType;
        };
        this.setVideoContentType = function (newVideoContentTypeValue) {
            videoContentType = newVideoContentTypeValue;
        };

        var vastMediaFileDuration = '00:00:01'; // minimum of 1 second in vast media file duration
        this.getVastMediaFileDuration = function () {
            return vastMediaFileDuration;
        };
        this.setVastMediaFileDuration = function (newVastMediaFileDurationValue) {
            vastMediaFileDuration = newVastMediaFileDurationValue;
        };

        var mediaFileUrl = '';
        this.getMediaFileUrl = function () {
            return mediaFileUrl;
        };
        this.setMediaFileUrl = function (newMediaFileUrlValue) {
            mediaFileUrl = newMediaFileUrlValue;
        };

        var loaded = false;
        this.getLoaded = function () {
            return loaded;
        };
        this.setLoaded = function (newLoadedValue) {
            loaded = newLoadedValue;
        };

        var paused = false;
        this.getPaused = function getPaused() {
            return paused;
        };
        this.setPaused = function (newPausedValue) {
            paused = newPausedValue;
        };

        var ended = false;
        this.getEnded = function () {
            return ended;
        };
        this.setEnded = function (newEndedValue) {
            ended = newEndedValue;
        };

        var storedPercent = -1;
        this.getStoredPercent = function () {
            return storedPercent;
        };
        this.setStoredPercent = function (newStoredPercentValue) {
            storedPercent = newStoredPercentValue;
        };

        var duration = 0;
        this.getDuration = function () {
            return duration;
        };
        this.setDuration = function (newDurationValue) {
            duration = newDurationValue;
        };

        var progress = 0;
        this.getProgress = function () {
            return progress;
        };
        this.setProgress = function (newProgressValue) {
            progress = newProgressValue;
        };

        // reward settings
        var rewardAttempted = false;
        this.getRewardAttempted = function () {
            return rewardAttempted;
        };
        this.setRewardAttempted = function (newRewardAttemptedValue) {
            rewardAttempted = newRewardAttemptedValue;
        };

        var rewardDelivered = 0;
        this.getRewardDelivered = function () {
            return rewardDelivered;
        };
        this.setRewardDelivered = function (newRewardDeliveredValue) {
            rewardDelivered = newRewardDeliveredValue;
        };

        var rewarded = false;
        this.getRewarded = function () {
            return rewarded;
        };
        this.setRewarded = function (newRewardedValue) {
            rewarded = newRewardedValue;
        };

        var exitString = 'exit:';
        this.getExitString = function () {
            return exitString;
        };
        this.setExitString = function (newExitStringValue) {
            exitString = newExitStringValue;
        };

        var popupCause = 'pause'; // pause, timeout, etc
        this.getPopupCause = function () {
            return popupCause;
        };
        this.setPopupCause = function (newPopupCauseValue) {
            popupCause = newPopupCauseValue;
        };

        var canPauseMusicSent = false;
        this.getCanPauseMusicSent = function () {
            return canPauseMusicSent;
        };
        this.setCanPauseMusicSent = function (newCanPauseMusicSentValue) {
            canPauseMusicSent = newCanPauseMusicSentValue;
        };

        // Tracking flags
        var trackingFlags = {
            // Impression event
            trackImpressionDone: false,

            // Clickthrough event
            trackClickthroughDone: false,

            // AdVideoStart event
            trackAdVideoStartDone: false,

            // AdVideoFirstQuartile event
            trackAdVideoFirstQuartileDone: false,

            // AdVideoMidpoint event
            trackAdVideoMidpointDone: false,

            // AdVideoThirdQuartile event
            trackAdVideoThirdQuartileDone: false,

            // AdVideoComplete event
            trackAdVideoCompleteDone: false,

            // AdUserAcceptInvitation
            trackAdUserAcceptInvitationDone: false,

            // AdUserMinimizeDone
            trackAdUserMinimizeDone: false,

            // AdUserCloseDone
            trackAdUserCloseDone: false,

            // Glot tracking done
            trackGlotImpressionDone: false
        };

        this.trackGlotImpression = function () {
            if (trackingFlags.trackGlotImpressionDone === true) {
                return true;
            }

            trackingFlags.trackGlotImpressionDone = true;

            // GLOT impression tracking
            if (settings.gladsGlotTrackingImpressionUrl.indexOf('track:') > -1) {
                settings.glftSspRouter.redirect(settings.gladsGlotTrackingImpressionUrl);
            }
        };

        this.trackAdVolumeChange = function () {
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVolumeChange', adVolume: 1 });
        };

        this.trackPlaying = function () {
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdPlaying', adVolume: 1 });
        };

        this.trackAdStopped = function () {
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdStopped', adVolume: 1 });
        };

        this.trackPaused = function () {
            _this.paused = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdPaused', adVolume: 1 });

            // final vast tracking
            if (typeof settings.vastData['trackingEvents']['pause'] !== 'undefined' &&
                settings.vastData['trackingEvents']['pause'] !== null &&
                settings.vastData['trackingEvents']['pause'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['pause']) {
                    if (settings.vastData['trackingEvents']['pause'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['pause'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['pause'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['pause'] !== null &&
                settings.redirectionCache['trackingEvents']['pause'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['pause']) {
                    if (settings.redirectionCache['trackingEvents']['pause'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['pause'][key]);
                    }
                }
            }

            if (typeof settings.gladsTrackingUrls['pauseTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['pauseTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['pauseTrackingURL']);
            }
        };

        this.trackResumed = function () {
            _this.paused = false;

            if (typeof settings.vastData['trackingEvents']['resume'] !== 'undefined' &&
                settings.vastData['trackingEvents']['resume'] !== null &&
                settings.vastData['trackingEvents']['resume'] !== ''
            ) {
                //console.log('Vast data: Tracking resume.');
                for (var key in settings.vastData['trackingEvents']['resume']) {
                    if (settings.vastData['trackingEvents']['resume'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['resume'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['resume'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['resume'] !== null &&
                settings.redirectionCache['trackingEvents']['resume'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['resume']) {
                    if (settings.redirectionCache['trackingEvents']['resume'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['resume'][key]);
                    }
                }
            }
        };

        this.trackImpression = function () {
            // if impression tracking was already done, don't do it again
            if (trackingFlags.trackImpressionDone === true) {
                return true;
            }

            // flag impression as already being tracked
            trackingFlags.trackImpressionDone = true;

            // Track partner impressions (from the vast file)
            if (typeof settings.vastData['impressions'] !== 'undefined' &&
                settings.vastData['impressions'] !== null &&
                settings.vastData['impressions'] !== ''
            ) {
                for (var key in settings.vastData['impressions']) {
                    if (settings.vastData['impressions'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['impressions'][key]);
                    }
                }
            }

            // Track partner viewability impressions (from the vast file)
            if (typeof settings.vastData['viewableImpressions'] !== 'undefined' &&
                settings.vastData['viewableImpressions'] !== null &&
                settings.vastData['viewableImpressions'] !== ''
            ) {
                for (var key in settings.vastData['viewableImpressions']) {
                    if (settings.vastData['viewableImpressions'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['viewableImpressions'][key]);
                    }
                }
            }

            // Tracking GLADS Impression
            settings.glftSspTracker.track(settings.gladsImpressionTrackingUrl);

                        // SSP Beacon URL
            var sspBeaconUrl = 'https://ssp-ges.gameloft.com/tracking/beacon?hash=4068e788-2606-48eb-9bcf-d341b3d950b6';

            // Send Beacon tracking
            settings.glftSspTracker.track(sspBeaconUrl);

            // Tracking Partner Impressions (in addition to the vast impressions)
            if (settings.partnerImpressionTrackingUrls && typeof(settings.partnerImpressionTrackingUrls) === 'object') {
                for (var key in settings.partnerImpressionTrackingUrls) {
                    if (settings.partnerImpressionTrackingUrls.hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.partnerImpressionTrackingUrls[key]);
                    }
                }
            }

            // Tracking Redirection cache impressions
            if (typeof settings.redirectionCache['impressions'] !== 'undefined' &&
                settings.redirectionCache['impressions'] !== null &&
                settings.redirectionCache['impressions'] !== ''
            ) {
                for (var key in settings.redirectionCache['impressions']) {
                    if (settings.redirectionCache['impressions'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['impressions'][key]);
                    }
                }
            }

            // Tracking Redirection cache vieability impressions
            if (typeof settings.redirectionCache['viewableImpressions'] !== 'undefined' &&
                settings.redirectionCache['viewableImpressions'] !== null &&
                settings.redirectionCache['viewableImpressions'] !== ''
            ) {
                for (var key in settings.redirectionCache['viewableImpressions']) {
                    if (settings.redirectionCache['viewableImpressions'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['viewableImpressions'][key]);
                    }
                }
            }
        };

        this.trackClickthrough = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackClickthroughDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackClickthroughDone = true;

            // Send Click tracking
            if (typeof settings.sspClickUrl !== 'undefined' &&
                settings.sspClickUrl !== ''
            ) {
                settings.glftSspTracker.track(settings.sspClickUrl);
            }

            // internal tracking
            settings.glftSspTracker.track(settings.gladsClickTrackingUrl);

            //Click through Tracking
            if (typeof settings.vastData['clickTracking'] !== 'undefined' &&
                settings.vastData['clickTracking'] !== null &&
                settings.vastData['clickTracking'] !== ''
            ) {
                for (var key in settings.vastData['clickTracking']) {
                    if (settings.vastData['clickTracking'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['clickTracking'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['clickTracking'] !== 'undefined' &&
                settings.redirectionCache['clickTracking'] !== null &&
                settings.redirectionCache['clickTracking'] !== ''
            ) {
                for (var key in settings.redirectionCache['clickTracking']) {
                    if (settings.redirectionCache['clickTracking'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['clickTracking'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['clickThrough'] !== 'undefined' &&
                settings.redirectionCache['clickThrough'] !== null &&
                settings.redirectionCache['clickThrough'] !== ''
            ) {
                for (var key in settings.redirectionCache['clickThrough']) {
                    if (settings.redirectionCache['clickThrough'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['clickThrough'][key]);
                    }
                }
            }
        };

        this.trackAdVideoStart = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdVideoStartDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdVideoStartDone = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVideoStart', adVolume: 1 });

            if (typeof settings.vastData['trackingEvents']['start'] !== 'undefined' &&
                settings.vastData['trackingEvents']['start'] !== null &&
                settings.vastData['trackingEvents']['start'] !== ''
            ) {
                //console.log('Vast data: Tracking video start.');
                for (var key in settings.vastData['trackingEvents']['start']) {
                    if (settings.vastData['trackingEvents']['start'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['start'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['start'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['start'] !== null &&
                settings.redirectionCache['trackingEvents']['start'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['start']) {
                    if (settings.redirectionCache['trackingEvents']['start'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['start'][key]);
                    }
                }
            }

            // internal tracking
            if (typeof settings.gladsTrackingUrls['startTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['startTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['startTrackingURL']);
            }
        };

        this.trackAdVideoFirstQuartile = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdVideoFirstQuartileDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdVideoFirstQuartileDone = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVideoFirstQuartile', adVolume: 1 });

            if (typeof settings.vastData['trackingEvents']['firstQuartile'] !== 'undefined' &&
                settings.vastData['trackingEvents']['firstQuartile'] !== null &&
                settings.vastData['trackingEvents']['firstQuartile'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['firstQuartile']) {
                    if (settings.vastData['trackingEvents']['firstQuartile'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['firstQuartile'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['firstQuartile'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['firstQuartile'] !== null &&
                settings.redirectionCache['trackingEvents']['firstQuartile'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['firstQuartile']) {
                    if (settings.redirectionCache['trackingEvents']['firstQuartile'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['firstQuartile'][key]);
                    }
                }
            }

            if (typeof settings.gladsTrackingUrls['firstQuartileTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['firstQuartileTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['firstQuartileTrackingURL']);
            }


                    };

        this.trackAdVideoMidpoint = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdVideoMidpointDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdVideoMidpointDone = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVideoMidpoint', adVolume: 1 });

            if (typeof settings.vastData['trackingEvents']['midpoint'] !== 'undefined' &&
                settings.vastData['trackingEvents']['midpoint'] !== null &&
                settings.vastData['trackingEvents']['midpoint'] !== ''
            ) {
                //console.log('Vast data: Tracking midpoint.');
                for (var key in settings.vastData['trackingEvents']['midpoint']) {
                    if (settings.vastData['trackingEvents']['midpoint'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['midpoint'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['midpoint'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['midpoint'] !== null &&
                settings.redirectionCache['trackingEvents']['midpoint'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['midpoint']) {
                    if (settings.redirectionCache['trackingEvents']['midpoint'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['midpoint'][key]);
                    }
                }
            }

            if (typeof settings.gladsTrackingUrls['midpointTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['midpointTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['midpointTrackingURL']);
            }


                    };

        this.trackAdVideoThirdQuartile = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdVideoThirdQuartileDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdVideoThirdQuartileDone = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVideoThirdQuartile', adVolume: 1 });

            if (typeof settings.vastData['trackingEvents']['thirdQuartile'] !== 'undefined' &&
                settings.vastData['trackingEvents']['thirdQuartile'] !== null &&
                settings.vastData['trackingEvents']['thirdQuartile'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['thirdQuartile']) {
                    if (settings.vastData['trackingEvents']['thirdQuartile'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['thirdQuartile'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['thirdQuartile'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['thirdQuartile'] !== null &&
                settings.redirectionCache['trackingEvents']['thirdQuartile'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['thirdQuartile']) {
                    if (settings.redirectionCache['trackingEvents']['thirdQuartile'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['thirdQuartile'][key]);
                    }
                }
            }

            if (typeof settings.gladsTrackingUrls['thirdQuartileTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['thirdQuartileTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['thirdQuartileTrackingURL']);
            }


                    };

        this.trackAdVideoComplete = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdVideoCompleteDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdVideoCompleteDone = true;

            // MOAT tracking
            this.moatApiReference && this.moatApiReference.dispatchEvent({ type: 'AdVideoComplete', adVolume: 1 });

            // GLOT video complete tracking
            if (settings.gladsGlotTrackingVideoCompleteUrl.indexOf('videocomplete:') > -1) {
                settings.glftSspRouter.redirect(settings.gladsGlotTrackingVideoCompleteUrl);
            }

            if (typeof settings.vastData['trackingEvents']['complete'] !== 'undefined' &&
                settings.vastData['trackingEvents']['complete'] !== null &&
                settings.vastData['trackingEvents']['complete'] !== ''
            ) {
                //console.log('Vast data: Tracking video complete.');
                for (var key in settings.vastData['trackingEvents']['complete']) {
                    if (settings.vastData['trackingEvents']['complete'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['complete'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['complete'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['complete'] !== null &&
                settings.redirectionCache['trackingEvents']['complete'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['complete']) {
                    if (settings.redirectionCache['trackingEvents']['complete'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['complete'][key]);
                    }
                }
            }

            if (typeof settings.gladsTrackingUrls['completeTrackingURL'] !== 'undefined' &&
                settings.gladsTrackingUrls['completeTrackingURL'] !== ''
            ) {
                settings.glftSspTracker.track(settings.gladsTrackingUrls['completeTrackingURL']);
            }
        };

        this.trackAdUserAcceptInvitation = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdUserAcceptInvitationDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdUserAcceptInvitationDone = true;

            if (typeof settings.vastData['trackingEvents']['acceptInvitation'] !== 'undefined' &&
                settings.vastData['trackingEvents']['acceptInvitation'] !== null &&
                settings.vastData['trackingEvents']['acceptInvitation'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['acceptInvitation']) {
                    if (settings.vastData['trackingEvents']['acceptInvitation'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['acceptInvitation'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['acceptInvitation'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['acceptInvitation'] !== null &&
                settings.redirectionCache['trackingEvents']['acceptInvitation'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['acceptInvitation']) {
                    if (settings.redirectionCache['trackingEvents']['acceptInvitation'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['acceptInvitation'][key]);
                    }
                }
            }
        };

        this.trackAdUserMinimize = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdUserMinimizeDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdUserMinimizeDone = true;

            if (typeof settings.vastData['trackingEvents']['collapse'] !== 'undefined' &&
                settings.vastData['trackingEvents']['collapse'] !== null &&
                settings.vastData['trackingEvents']['collapse'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['collapse']) {
                    if (settings.vastData['trackingEvents']['collapse'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['collapse'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['collapse'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['collapse'] !== null &&
                settings.redirectionCache['trackingEvents']['collapse'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['collapse']) {
                    if (settings.redirectionCache['trackingEvents']['collapse'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['collapse'][key]);
                    }
                }
            }
        };

        this.trackAdUserClose = function () {
            // if tracking was already done, don't do it again
            if (trackingFlags.trackAdUserCloseDone === true) {
                return true;
            }

            // flag event as having been tracked
            trackingFlags.trackAdUserCloseDone = true;

            if (typeof settings.vastData['trackingEvents']['close'] !== 'undefined' &&
                settings.vastData['trackingEvents']['close'] !== null &&
                settings.vastData['trackingEvents']['close'] !== ''
            ) {
                for (var key in settings.vastData['trackingEvents']['close']) {
                    if (settings.vastData['trackingEvents']['close'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.vastData['trackingEvents']['close'][key]);
                    }
                }
            }

            // track redirection cache
            if (typeof settings.redirectionCache['trackingEvents']['close'] !== 'undefined' &&
                settings.redirectionCache['trackingEvents']['close'] !== null &&
                settings.redirectionCache['trackingEvents']['close'] !== ''
            ) {
                for (var key in settings.redirectionCache['trackingEvents']['close']) {
                    if (settings.redirectionCache['trackingEvents']['close'].hasOwnProperty(key)) {
                        settings.glftSspTracker.track(settings.redirectionCache['trackingEvents']['close'][key]);
                    }
                }
            }
        };
    };
</script>


    <script type="text/javascript">
    var glftSspAdjuster = function (options) {
        var _this = this;

        var settings = {
            adjustableElementObj: '',
            adjustableElementReferenceObj: '', // if it is present it will be used as reference size
            adjustableElementContainerObj: '',
            viewportPercentile: 0.9,
            adjustableElementHeight: 0,
            adjustableElementWidth: 0,
            adjustableElementResizedHeight: 0,
            adjustableElementResizedWidth: 0,
            adjustableAreas: '',
            adjustableAreasOriginalSizes: [],
            ignoreRatio: false,
            centerAdjustableElement: true,
            adjustVertical: true,
            adjustHorizontal: true
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        var storedViewPortHeight = 0;
        var storedViewPortWidth = 0;

        // Various init
        if (settings.adjustableAreas && typeof settings.adjustableAreas != 'undefined' && settings.adjustableAreas != '') {
            for (var i = 0; i < settings.adjustableAreas.length; i++) {
                settings.adjustableAreasOriginalSizes[i] = settings.adjustableAreas[i].coords;
            }
        }

        // Viewport dimensions getter
        this.getViewportDimensions = function () {
            var viewportWidth;
            var viewportHeight;

            // the more standards compliant browsers (mozilla/opera/IE7) use window.innerWidth and window.innerHeight
            if (typeof window.innerWidth != 'undefined') {
                viewportWidth = window.innerWidth;
                viewportHeight = window.innerHeight;
            }
            // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
            else if (
                    typeof document.documentElement != 'undefined' &&
                    typeof document.documentElement.clientWidth != 'undefined' &&
                    document.documentElement.clientWidth != 0
            ) {
                viewportWidth = document.documentElement.clientWidth;
                viewportHeight = document.documentElement.clientHeight;
            }
            // older versions of IE
            else {
                viewportWidth = document.getElementsByTagName('body')[0].clientWidth;
                viewportHeight = document.getElementsByTagName('body')[0].clientHeight;
            }

            return {
                width: viewportWidth,
                height: viewportHeight
            };
        };

        this.alignElement = function (dynamic) {
            viewportDimensions = _this.getViewportDimensions();

            var currentViewportHeight = viewportDimensions['height'];
            var currentViewportWidth = viewportDimensions['width'];

            var adjustableElementHeight = settings.adjustableElementHeight;
            var adjustableElementWidth = settings.adjustableElementWidth;
            if (dynamic) {
                adjustableElementHeight = settings.adjustableElementObj.clientHeight;
                adjustableElementWidth = settings.adjustableElementObj.clientWidth;
            }

            // Aligning to center
            var elementTop = Math.round((currentViewportHeight - Math.round(parseInt(adjustableElementHeight))) / 2);
            var elementLeft = Math.round((currentViewportWidth - Math.round(parseInt(adjustableElementWidth))) / 2);

            settings.adjustableElementObj.style.top = elementTop + 'px';
            settings.adjustableElementObj.style.left = elementLeft + 'px';

            // align container
            if (typeof settings.adjustableElementContainerObj == 'object') {
                settings.adjustableElementContainerObj.style.top = elementTop + 'px';
                settings.adjustableElementContainerObj.style.left = elementLeft + 'px';
            }

            setTimeout(
                function () {
                    _this.alignElement(dynamic);
                },
                100
            );
        };

        var getSizeCalled = false;
        this.getElementSizes = function () {
            getSizeCalled = true;

            settings.adjustableElementWidth = settings.adjustableElementObj.width;
            settings.adjustableElementHeight = settings.adjustableElementObj.height;

            setTimeout(
                    function () {
                        _this.getElementSizes();
                    },
                    150
            );
        };

        this.adjustElement = function (dynamic) {
            if (getSizeCalled == false) {
                if (settings.refreshElementSize) {
                    this.getElementSizes();
                }
            }

            var viewportDimensions = this.getViewportDimensions();
            if (typeof settings.adjustableElementReferenceObj == 'object') {
                viewportDimensions = {
                    width: settings.adjustableElementReferenceObj.clientWidth,
                    height: settings.adjustableElementReferenceObj.clientHeight
                };
            }

            var currentViewportHeight = viewportDimensions['height'];
            var currentViewportWidth = viewportDimensions['width'];

            window.scrollTo(0, 0);

            var adjustableElementHeight = settings.adjustableElementHeight;
            var adjustableElementWidth = settings.adjustableElementWidth;
            if (dynamic) {
                adjustableElementHeight = settings.adjustableElementObj.clientHeight;
                adjustableElementWidth = settings.adjustableElementObj.clientWidth;
            }

            var imageRatio = adjustableElementWidth / adjustableElementHeight;
            var currentViewRatio = currentViewportWidth / currentViewportHeight;

            if (settings.ignoreRatio) {
                settings.adjustableElementResizedHeight = currentViewportHeight;
                settings.adjustableElementResizedWidth = currentViewportWidth;
            } else {
                if (currentViewRatio > imageRatio) {
                    settings.adjustableElementResizedWidth = adjustableElementWidth * currentViewportHeight / adjustableElementHeight;
                    settings.adjustableElementResizedHeight = currentViewportHeight;
                } else {
                    settings.adjustableElementResizedWidth = currentViewportWidth;
                    settings.adjustableElementResizedHeight = adjustableElementHeight * currentViewportWidth / adjustableElementWidth;
                }
            }

            settings.adjustableElementResizedHeight = Math.floor(settings.viewportPercentile * Math.floor(settings.adjustableElementResizedHeight));
            settings.adjustableElementResizedWidth = Math.floor(settings.viewportPercentile * Math.floor(settings.adjustableElementResizedWidth));

            // Dynamically setting object dimensions
            settings.adjustableElementObj.style.width = settings.adjustableElementResizedWidth + 'px';
            settings.adjustableElementObj.style.height = settings.adjustableElementResizedHeight + 'px';

            if (typeof settings.adjustableElementContainerObj == 'object') {
                settings.adjustableElementContainerObj.style.width = settings.adjustableElementResizedWidth + 'px';
                settings.adjustableElementContainerObj.style.height = settings.adjustableElementResizedHeight + 'px';
            }

            if (settings.centerAdjustableElement) {
                // Aligning to center
                elementTop = Math.round((currentViewportHeight - Math.round(parseInt(settings.adjustableElementObj.style.height))) / 2);
                elementLeft = Math.round((currentViewportWidth - Math.round(parseInt(settings.adjustableElementObj.style.width))) / 2);

                // align container
                if (typeof settings.adjustableElementContainerObj == 'object') {
                    if (settings.adjustVertical) {
                        settings.adjustableElementContainerObj.style.top = elementTop + 'px';
                    }
                    if (settings.adjustHorizontal) {
                        settings.adjustableElementContainerObj.style.left = elementLeft + 'px';
                    }
                } else {
                    if (settings.adjustVertical) {
                        settings.adjustableElementObj.style.top = elementTop + 'px';
                    }
                    if (settings.adjustHorizontal) {
                        settings.adjustableElementObj.style.left = elementLeft + 'px';
                    }
                }
            }


            // scale areas
            if (settings.adjustableAreas && typeof settings.adjustableAreas != 'undefined' && settings.adjustableAreas != '') {
                var rescaleAreaRatio = settings.adjustableElementResizedWidth / settings.adjustableElementWidth;
                for (var i = 0; i < settings.adjustableAreas.length; i++) {
                    coords = settings.adjustableAreasOriginalSizes[i];
                    coordsSplit = coords.split(',');

                    newCoords = [];
                    for (j = 0; j < coordsSplit.length; j++) {
                        newCoords[j] = Math.round(parseInt(coordsSplit[j]) * rescaleAreaRatio);
                    }

                    settings.adjustableAreas[i].coords = newCoords.join(',');
                }
            }

            // Storing new dimensions
            storedViewPortHeight = currentViewportHeight;
            storedViewPortWidth = currentViewportWidth;

            var _this = this;
            setTimeout(
                function () {
                    _this.adjustElement(dynamic);
                },
                50
            );
        }
    }
</script>

    <script text="text/javascript">
    var glftSspWsHandler = function (options) {
        var _this = this;

        var settings = {
            startAdObject: '',
            optinUrl: '',
            adjustableAreas: '',
            inOrOut: [],
        };
        for (var key in options) {
            settings[key] = options[key];
        }

        this.isWs = function () {
            var specialOptin = false;

            // special optin takes precedence over buddypack
            if (specialOptin) {
                return 'special';
            } else if (
                glftSspBuddyPackIV === true &&
                enterScreenSrc.indexOf('[enterScreenSrc]') === -1 && enterScreenSrc !== ''
            ) {
                return 'buddypack';
            }

            return false;
        }

        this.startWs = function (wsType) {
            if (typeof wsType === 'undefined' || wsType === null || wsType === '') {
                settings.startAdObject.startAd();
            }

            switch (wsType) {
                // custom type ws left separate
                case 'buddypack':
                    _this.initBuddyPack();
                    break;
                // potentially more generic ws treated unified
                case 'special':
                    _this.initSpecialWs(); // e.g. political ws optin
                    break;
                default:
                    settings.startAdObject.startAd();
                    break;
            }
        }

        this.initSpecialWs = function () {
            // attach close event to c
            document.getElementById('specialWsCloseContainer').addEventListener(glftSspToolsObject.getClickEvent(), function (e) {
                e.stopPropagation();

                glftSspTracker.track(settings.optinUrl + '&out');

                setTimeout(
                        function () {
                            closeFunction();
                        },
                        250
                );
            });

            // adjustable areas
            settings.adjustableAreas = document.getElementsByName('specialWsArea');
            if (settings.adjustableAreas && typeof settings.adjustableAreas != 'undefined' && settings.adjustableAreas != '') {
                for (var i = 0; i < settings.adjustableAreas.length; i++) {
                    if (settings.adjustableAreas[i].href) {
                        hrefSplit = settings.adjustableAreas[i].href.split(':');
                        if (hrefSplit[0]) {
                            switch (hrefSplit[0]) {
                                case 'optin':
                                    settings.adjustableAreas[i].href = '';

                                    settings.inOrOut[i] = 'in';

                                    settings.adjustableAreas[i].alt = 'in';
                                    break;
                                case 'optout':
                                    settings.adjustableAreas[i].href = '';

                                    settings.inOrOut[i] = 'out';

                                    settings.adjustableAreas[i].alt = 'out';
                                    break;
                                default:
                                    break;
                            }
                        }
                    }

                    settings.adjustableAreas[i].addEventListener('click', function (event) {
                        event.preventDefault();

                        if (_os == 'android') {
                            glftSspTracker.track(settings.optinUrl + '&' + event.target.alt);

                            if (event.target.alt == 'in') {
                                // hide special ws
                                document.getElementById('specialWsContainer').style.display = 'none';

                                // displayloader
                                document.getElementById('loader_cont').style.display = 'block';

                                // hide overlay
                                document.getElementById('wsOverlay').style.display = 'none';

                                settings.startAdObject.startAd();
                            } else {
                                setTimeout(
                                        function () {
                                            closeFunction();
                                        },
                                        250
                                );
                            }
                        }

                        return false;
                    });

                    if (_os == 'ios') {
                        settings.adjustableAreas[i].addEventListener('touchend', function (event) {
                            event.preventDefault();

                            glftSspTracker.track(settings.optinUrl + '&' + event.target.alt);

                            if (event.target.alt == 'in') {
                                // hide special ws
                                document.getElementById('specialWsContainer').style.display = 'none';

                                // displayloader
                                document.getElementById('loader_cont').style.display = 'block';

                                // hide overlay
                                document.getElementById('wsOverlay').style.display = 'none';

                                settings.startAdObject.startAd();
                            } else {
                                closeFunction();
                            }

                            return false;
                        });
                    }


                    settings.adjustableAreas[i].addEventListener('keypress', function (event) {
                        if (event.keyCode==13 || event.keyCode==96) {
                            this.blur()

                            glftSspTracker.track(settings.optinUrl + '&' + event.target.alt);

                            if (event.target.alt == 'in') {
                                // hide special ws
                                document.getElementById('specialWsContainer').style.display = 'none';

                                // displayloader
                                document.getElementById('loader_cont').style.display = 'block';

                                // hide overlay
                                document.getElementById('wsOverlay').style.display = 'none';

                                settings.startAdObject.startAd();
                            } else {
                                closeFunction();
                            }
                        };
                    });
                }
            }

            // hide loader
            document.getElementById('loader_cont').style.display = 'none';

            // display buddy ws
            document.getElementById('specialWsContainer').style.display = 'block';

            var glftSspAdjusterObject = new glftSspAdjuster({
                adjustableElementObj: document.getElementById('specialWsImage'),
                adjustableElementContainerObj: document.getElementById('specialWsContainer'),
                adjustableElementHeight: document.getElementById('specialWsImage').height,
                adjustableElementWidth: document.getElementById('specialWsImage').width,
                adjustableAreas: settings.adjustableAreas
            });

            //glftSspAdjusterObject.alignElement();
            glftSspAdjusterObject.adjustElement();
        }

        this.initBuddyPack = function () {
            // attach close event to c
            document.getElementById('buddyPackWsCloseContainer').addEventListener(glftSspToolsObject.getClickEvent(), function (e) {
                e.stopPropagation();

                closeFunction();
            });

            document.getElementById('buddyPackWsImage').addEventListener(glftSspToolsObject.getClickEvent(), function (e) {
                e.stopPropagation();

                // hide buddy ad
                document.getElementById('buddyPackWsContainer').style.display = 'none';

                // displayloader
                document.getElementById('loader_cont').style.display = 'block';

                // hide overlay
                document.getElementById('wsOverlay').style.display = 'none';

                settings.startAdObject.startAd();
            });

            // hide loader
            document.getElementById('loader_cont').style.display = 'none';

            // display overlay
            document.getElementById('wsOverlay').style.display = 'block';

            // display buddy ws
            document.getElementById('buddyPackWsContainer').style.display = 'block';

            var glftSspAdjusterObject = new glftSspAdjuster({
                adjustableElementObj: document.getElementById('buddyPackWsImage'),
                adjustableElementContainerObj: document.getElementById('buddyPackWsContainer'),
                adjustableElementHeight: document.getElementById('buddyPackWsImage').height,
                adjustableElementWidth: document.getElementById('buddyPackWsImage').width,
            });

            //glftSspAdjusterObject.alignElement();
            glftSspAdjusterObject.adjustElement();
        }
    };
</script>

    <script type="text/javascript">
    var glftSspVideoStateHandler = function (options) {
        var _this = this;

        var settings = {
            videoDomObject: '',
            vpaidObject: '',
            timeoutPopupDomObject: {},
            cancelPopupDomObject: {},
            adStatusObject: {},
            timeoutMonitorIntervalCounter: 0,
            videoPlayedInCurrentInterval: 0,
            videoTotalPlayedSoFar: 0
        };
        for (var key in options) {
            settings[key] = options[key];
        }

        this.setOptions = function (optionsToSet) {
            for (var key in optionsToSet) {
                settings[key] = optionsToSet[key];
            }
        };

        this.setPlayedTime = function (currentTime) {
            settings.videoPlayedInCurrentInterval += currentTime - settings.videoTotalPlayedSoFar;

            settings.videoTotalPlayedSoFar = currentTime;
        };

        // init monitors
        this.timeoutMonitorInterval = {};

        this.startStateMonitoring = function () {
            // timeout monitoring
            _this.timeoutMonitorInterval = setInterval(function () {
                if (settings.timeoutMonitorIntervalCounter >= 10) {
                    if (settings.videoPlayedInCurrentInterval < 3) {
                        settings.adStatusObject.setPopupCause('timeout');

                        // trying to pause ad if vpaid
                        if (typeof settings.vpaidObject === 'object') {
                            settings.vpaidObject.pauseAd();
                        } else {
                            // pausing video
                            settings.videoDomObject.pause();
                        }

                        // display retry just in case
                        if (settings.adStatusObject.getEnded() !== true) {
                            _this.changePopupState('show');
                        }

                        clearInterval(_this.timeoutMonitorInterval);
                    }

                    if (settings.adStatusObject.getEnded() === true) {
                        clearInterval(_this.timeoutMonitorInterval);
                    }
                    settings.videoPlayedInCurrentInterval = 0;
                    settings.timeoutMonitorIntervalCounter = 0;
                }

                settings.timeoutMonitorIntervalCounter += 1;
            }, 1000);
        };

        /**
         * Restart state monitoring if the videoSlot is not used
         * Used for Spotxchange in 1st, 2nd & 3rd quartile tracking
         */
        this.restartStateMonitoring = function () {
            if (settings.adStatusObject.getLoaded()) {
                if (!settings.videoDomObject.src || settings.videoDomObject.src.indexOf('blank1x1.mp4') > -1) {
                    clearInterval(_this.timeoutMonitorInterval);
                    settings.timeoutMonitorIntervalCounter = 0;
                    settings.videoPlayedInCurrentInterval = 0;
                }
            }
        };

        this.popupDisplayed = function () {
            if (settings.cancelPopupDomObject.style.display === 'block' ||
                settings.timeoutPopupDomObject.style.display === 'block'
            ) {
                return true;
            }

            return false;
        };

        this.changePopupState = function (action) {
            if (action === 'hide') {
                if (settings.timeoutPopupDomObject.style.display === 'block') {
                    _this.startStateMonitoring();
                }

                settings.cancelPopupDomObject.style.display = 'none';
                settings.timeoutPopupDomObject.style.display = 'none';

                return true;
            }

            if (action === 'show') {
                switch (settings.adStatusObject.getPopupCause()) {
                    case 'pause':
                            if (settings.timeoutPopupDomObject.style.display !== 'block') {
                                settings.cancelPopupDomObject.style.display = 'block';
                            }
                        break;
                    case 'timeout':
                        if (settings.cancelPopupDomObject.style.display !== 'block') {
                            settings.timeoutPopupDomObject.style.display = 'block';
                        }
                        break;
                }

                return true;
            }
        }
    };
</script>

    <script type="text/javascript">
        var glftSspRouter = {
    redirect: function (destination) {
        if (typeof inIframe === 'function' && inIframe()) {
            this.redirectInIframe(destination);
        } else {
            this.redirectInTopWindow(destination);
        }
    },
    redirectInIframe: function (destination) {
        parent.postMessage({
            name: destination
        }, "*");
    },
    redirectInTopWindow: function (destination) {
        if (_os && (_os === 'win' || _os === 'winp' || _os === 'WINDOWS')) {
            window.external.notify(destination);
        } else {
            window.location = destination;
        }
    }
};    </script>


    <script type="text/javascript">
    var glftSspStartAd = function (options) {
        var _this = this;

        var settings = {
            vastData: '',
            videoDomObject: '',
            forceMp4IfPresent: '',
            adStatusObject: '',
            sspRouter: '',
            cornerTimerObject: '',
            videoPlayerObject: '',
            rewardHandlerObject: '',
            closeButtonDomObject: '',
            closeButtonHandlerObject: '',
            infoButtonDomObject: '',
            infoButtonHandlerObject: '',
            displayingInfoButton: '',
            videoStateHandlerObject: '',
            adjusterObject: '',
            clickparserObject: '',
            adParameters: ''
        };
        for (var key in options) {
            if (options.hasOwnProperty(key)) {
                settings[key] = options[key];
            }
        }

        // vpaid related variables, to keep at object level
        var vpaidUrlScript = '';
        var VPAIDGetCreativeFunction = '';
        var VPAIDCreativeObject = '';
        var VPAIDPlayerObject = '';
        this.getVPAIDPlayerObject = function () {
            return VPAIDPlayerObject;
        };
        this.setVPAIDPlayerObject = function (newVPAIDPlayerObjectValue) {
            VPAIDPlayerObject = newVPAIDPlayerObjectValue;
        };

        this.prepareCommon = function () {
            // show video container
            document.getElementById('videoPlayerContainer').style.visibility = 'visible';

            // set the background for the ad as BLACK
            document.body.style.backgroundColor = "#000000";

            // display ad advertisment label
            document.getElementById('advertismentLabel').style.display = 'block';

            var advertismentLabelLinkLayerDomObject = document.getElementById('advertismentLabelLinkLayer');
            advertismentLabelLinkLayerDomObject.addEventListener('click', function () {
                glftSspRouter.redirect('link:{[info_button_link]}');
            });

            // handle the display of the close/info buttons only if not rewardable
            if (typeof inIframe !== 'function' || inIframe() === false) {
                if (!settings.rewardHandlerObject.isRewardable()) {
                    settings.closeButtonHandlerObject.handleClose();

                    if (displayingInfoButton) {
                        settings.infoButtonHandlerObject.handleInfo();
                    }
                }
            }

            settings.videoStateHandlerObject.startStateMonitoring();
        };

        this.determineVideoContentType = function () {
            // establish type of content (mp4, vpaid or mp4&vpaid)
            if (typeof settings.vastData['mediaFile']['type'] !== 'undefined' &&
                settings.vastData['mediaFile']['type'] === 'video/mp4' &&
                !settings.forceMp4IfPresent && // only allow this dual behavior if mp4 is not forced
                typeof settings.vastData['interactiveMediaFile'] !== 'undefined' &&
                typeof settings.vastData['interactiveMediaFile']['url'] !== 'undefined' &&
                settings.vastData['interactiveMediaFile']['url'] !== ''
            ) {
                settings.adStatusObject.setVideoContentType('vpaid/mp4');
            } else if (
                typeof settings.vastData['mediaFile']['type'] !== 'undefined' &&
                settings.vastData['mediaFile']['type'] === 'video/mp4'
            ) {
                settings.adStatusObject.setVideoContentType('mp4');
            } else if (
                typeof settings.vastData['mediaFile']['type'] !== 'undefined' &&
                settings.vastData['mediaFile']['type'] === 'application/javascript'
            ) {
                settings.adStatusObject.setVideoContentType('vpaid');
            }
        };

        this.startAd = function (forceVideContentType) {
            if (!forceVideContentType) {
                this.determineVideoContentType();
            } else {
                settings.adStatusObject.setVideoContentType(forceVideContentType);
            }

            this.prepareCommon();

            switch (settings.adStatusObject.getVideoContentType()) {
                case 'mp4':
                    settings.adStatusObject.setAdMode('mp4');

                    // set media file as the mp4
                    if (typeof settings.vastData['mediaFile']['url'] !== 'undefined' &&
                        settings.vastData['mediaFile']['url'] !== null &&
                        settings.vastData['mediaFile']['url'] !== ''
                    ) {
                        settings.adStatusObject.setMediaFileUrl(settings.vastData['mediaFile']['url']);

                        // hide vpaid container
                        document.getElementById('adDisplayContainer').style.display = 'none';

                        settings.videoPlayerObject.setOptions({
                            mp4FileUrl: settings.vastData['mediaFile']['url'],
                            playUsingMp4FileUrl: true
                        });

                        settings.cornerTimerObject.setOptions({
                            progressBarColor: 'rgba(0,255,0,1.0)'
                        });

                        settings.videoPlayerObject.init();
                    } else {
                        settings.sspRouter.redirect('exit:');
                    }
                    break;
                case 'vpaid':
                case 'vpaid/mp4':
                    settings.adStatusObject.setAdMode('vpaid');

                    if (typeof settings.vastData['mediaFile']['url'] !== 'undefined' &&
                        settings.vastData['mediaFile']['url'] !== null &&
                        settings.vastData['mediaFile']['url'] !== ''
                    ) {
                        if (
                            typeof settings.vastData['interactiveMediaFile'] !== 'undefined' &&
                            typeof settings.vastData['interactiveMediaFile']['url'] !== 'undefined' &&
                            settings.vastData['interactiveMediaFile']['url'] !== ''
                        ) {
                            vpaidUrlScript = settings.vastData['interactiveMediaFile']['url'];
                        } else {
                            vpaidUrlScript = settings.vastData['mediaFile']['url'];
                        }

                        settings.adStatusObject.setMediaFileUrl(settings.vastData['mediaFile']['url']);

                        settings.videoPlayerObject.setOptions({
                            mp4FileUrl: '',
                            playUsingMp4FileUrl: false
                        });

                        settings.cornerTimerObject.setOptions({
                            progressBarColor: 'rgba(255, 150, 0, 1.0)'
                        });

                        settings.videoPlayerObject.init();

                                                settings.videoPlayerObject.maintainVideoState();

                        // fetching iframe container
                        adLoaderIframeHtmlObject = document.getElementById('adLoaderIFrame');

                        // fetching iframe content obj
                        adLoaderIframeContent = (adLoaderIframeHtmlObject.contentWindow) ? adLoaderIframeHtmlObject.contentWindow : (adLoaderIframeHtmlObject.contentDocument.document) ? adLoaderIframeHtmlObject.contentDocument.document : adLoaderIframeHtmlObject.contentDocument;

                        // fetching iframe window object
                        adLoaderIframeWindow = adLoaderIframeHtmlObject.contentWindow || adLoaderIframeHtmlObject;

                        // add cachebuster for QA tests ONLY
                        if (window.glftSspCacheBuster && typeof window.glftSspCacheBuster === 'function') {
                            vpaidUrlScript = window.glftSspCacheBuster(vpaidUrlScript);
                        }

                        // trigger this right before the iframe is created
                        document.location = 'clearcacheandcookies:';

                        // opening content to write
                        adLoaderIframeContent.document.open();

                        // writing the AD with full container and style
                        adLoaderIframeContent.document.write(
                            '<html>' +
                            '<head>' +
                            '<script id="adLoaderScript" type="application/javascript" src="' + vpaidUrlScript + '"><\/script>' +
                            '</head>' +
                            '<body>' +
                            '<script>window.open = window.top.open = function (url) { window.parent.glftSspRouter.redirect(\'link:\' + url); }<\/script>' +
                            '</body>' +
                            '</html>'
                        );

                        // closing iframe document
                        adLoaderIframeContent.document.close();

                        // set dimensions of ad display container
                        adDisplayContainer = document.getElementById('adDisplayContainer');
                        setInterval(function () {
                            var viewportDimensions = settings.adjusterObject.getViewportDimensions();

                            adDisplayContainer.style.width = viewportDimensions['width'] + 'px';
                            adDisplayContainer.style.height = viewportDimensions['height'] + 'px';
                        }, 2000);

                        adLoaderIframeWindow.window.onload = function () {
                            VPAIDGetCreativeFunction = adLoaderIframeWindow.window['getVPAIDAd'];

                            if (VPAIDGetCreativeFunction && typeof VPAIDGetCreativeFunction === 'function') {
                                VPAIDCreativeObject = VPAIDGetCreativeFunction();
                                VPAIDPlayerObject = new VPAIDWrapper(VPAIDCreativeObject, {
                                    cornerTimerObject: settings.cornerTimerObject,
                                    adStatusObject: settings.adStatusObject,
                                    closeButtonDomObject: settings.closeButtonDomObject,
                                    infoButtonDomObject: settings.infoButtonDomObject,
                                    displayingInfoButton: settings.displayingInfoButton,
                                    videoStateHandlerObject: settings.videoStateHandlerObject,
                                    router: settings.sspRouter,
                                    rewardHandlerObject: settings.rewardHandlerObject,
                                    adDisplayContainer: adDisplayContainer,
                                    clickparserObject: settings.clickparserObject,
                                    closeButtonHandlerObject: settings.closeButtonHandlerObject,
                                    infoButtonHandlerObject: settings.infoButtonHandlerObject,
                                    adjusterObject: settings.adjusterObject,
                                    videoDomObject: settings.videoDomObject,
                                    videoPlayerObject: settings.videoPlayerObject,
                                    vpaidCleanupCallback: (settings.adStatusObject.getVideoContentType() === 'vpaid/mp4'?_this.cleanUpVpaid:'')
                                });

                                // establish viewport dimensions AFTER the window is loaded
                                var viewportDimensions = settings.adjusterObject.getViewportDimensions();
                                var currentViewportWidth = viewportDimensions['width'];
                                var currentViewportHeight = viewportDimensions['height'];

                                VPAIDPlayerObject.initAd(currentViewportWidth, currentViewportHeight, "fullscreen", 999999, settings.adParameters, {
                                    videoSlot: settings.videoDomObject,
                                    videoSlotCanAutoPlay: 1,
                                    slot: adDisplayContainer
                                });

                                settings.videoStateHandlerObject.setOptions({
                                    vpaidObject: VPAIDPlayerObject
                                });
                            }
                        }
                    } else {
                        settings.sspRouter.redirect('exit:');
                    }
                    break;
                default:
                    settings.sspRouter.redirect('exit:');
            }
        };

        // used as callback passed to the vpaid player
        // to be called on error to cleanup and prepare for mp4
        // Note: only for content type vpaid/mp4
        this.cleanUpVpaid = function () {
            // cleaning all traces of the adcontainer
            document.getElementById('adDisplayContainer').innerHTML = '';
            document.getElementById('adDisplayContainer').style.visibility = 'hidden';
            document.getElementById('adDisplayContainer').style.display = 'none';

            // erasing player source, resetting to empty default
            settings.videoDomObject.src = '';

            // cleaning up vpaid iframe
            document.getElementById('adLoaderIFrame').src = 'about:blank';

            // unsetting vpaid object references so they are removed from memory
            // warning: if any other reference exists objects will continue to exist
            VPAIDPlayerObject = undefined;
            VPAIDCreativeObject = undefined;
            VPAIDGetCreativeFunction = undefined;

            // cleanup counter for switch
            settings.cornerTimerObject.counterClean();

            // cleanup vplayer
            settings.videoPlayerObject.cleanUp();

            // cleanup circular timer
            settings.cornerTimerObject.defaultsCleanup();

            // start ad up again
            _this.startAd('mp4');
        };
    };
</script>
    <script type="text/javascript">
        var inIframe = function () {
    try {
        return window.self !== window.top;
    } catch (e) {
        return true;
    }
};    </script>


    <script type="application/javascript">
        // == Externally received params (glads) ==
        var client_id = '{[client_id]}';
        var anonymous = '{[anonymous]}';
        var campaign_id = '{[campaign_id]}';
        var creative_id = '{[creative_id]}';
        var deviceCountry = 'TW';
        var ipCountry = 'TW';
        var strStatsUrl = '{[statsUrl]}';

        // == Internally received param ==
        var device_firmware = '5.1.1';

        // == Internally received params (ssp) ==
        var _os = 'android';

        var sspClickUrl = '';
                // SSP Click URL
        sspClickUrl = 'https://ssp-ges.gameloft.com/tracking/click?hash=JTfV5eXkQTeQSnpwAm6I98iZvEhmjRnT3Hzz3osJuT9tscCBiSZJT1LH9X6OFQVOzrXASRArG5pWUhczkVrVwyAfIe%2BMsn9PWpvlKiMnzA6lyJWwWZFF9S0PXu8PkUPHK4KogOKcYF49QxAAyAn%2F11Z230rwYJEjHbSJi8K7a3NLQZCjvT7FIxem7Tkt%2BWF0%2B5uBEfP0ih4fMvcVRIdRyoxcqUYeiv0AWvR6Doc%2Fl87I7bH3Us9Ax47af7kBoW%2BC9tHJKdD9rgcvehnyvswglXkn%2BJRMLUGu0fHg6e%2BzvkuR%2F8zBFZ6ZnM2pO6BePIAHmsyc1eZeAeGBxAu6cDzDATwS63cmMHYAV69%2BczxvvZj%2FUyYczlF9g%2BMqCFE9Gt%2FBuUt6dCZpI0fjG3ifs6K60pKxG8kqiZDFiJXkEuukvjSs3G0RtX1FUQu4Ys2WZSj66nZUAVm7R8eyRg0Ss4UKgfpkhiAZUHXs0Mezdc80L1%2F3LdEf8JMoCj%2Fy8OMOdOeC2bt0k%2BvSXLYy%2BOKl4t8O%2B4LUyMUzn4BFfsHUkkIi0yyhveKE432ijvtRDL6OudU5oXzhjMBsR%2FUXFcV5RQCEiBBQwZHSF4ncwjBpPucfaHpQBheFI5t7DTfgQXZCtLDSd13tZjHKBE7FAm3mDY3YSzb0pgf%2B5zRH%2FFk%2FPzvTl9BDrBG5vv0CtzW%2BPdIF4RGTifOQKy6Kh7jQfXPr7B6F5c1OByxl4L1QJfTgAau1%2BNI%2BG1%2FsmN0bAx2XXFq88%2F1Tqi%2B%2Bm3th6Er2FLVs8RXj0EE%2Bn6UYqx0pte2609DJqCEQLbUPJ4jq8DU0RYNCDnoRjoHGdCPm7QXmjRLtB9Z1pLT%2BJNuMTGd%2FwQpLjdo8HFMoyANhN8txXK%2Bs80CZbSU4PaLXo9Djpazdl8E%2BakQhBCdn%2Fvlkik%2Bx0OvtSJrSBF%2F2%2FLdAX2moJTy33VaoS600saJJXmJKGzpL0p3j5%2BOQOqd5wB41TIqWHl1D2By3VYaOBMlAxCBIzn0wKNvAp0%2FPcjZ2jgoTDW1XEs4V0nGg0%2BT4fpsXsI%2BTLmwep4Fjs4zab%2FiVXIFG%2FKMkztPAZ61nOhiZV4jOq2olbOsvWuehTSAj810EY2p7dRiH%2FU1Tzj9OsGUfHyHiC%2FylBv72x7%2FKX4I%2BVPfBTDW%2Fp16G7%2BVrrXN%2B0KWuKcGOHuaauX4iD7qf0iMNof6%2B9uGKTDCftRACySt3z170zr6xNyrYR8rJ3gWP9yVz4fDkxBbuadMZD0v1rGvapasDflW%2BjGI9Atq6AVRcsp7%2BGKeI0OAIbRmqxmFj0QHBqYb5O%2Bs6FLzqyh0n0ECW53P5Q5ScWVRNpw9QfMmUuSFwCbunFeG6krdmtlfp2rs9sWPlLQ2yQrj8%2FvOnsYZ%2BsIiPo%2FkJ%2FXbPIuj%2B3vi2metTRt5NpWxsKf%2B9gTs3X%2BZEN2slrUVQylKQBoMbMFO5DEofMJB6unarp9EN2AlKz7zr%2B67Q9vqVf0UzjKRV%2FUanvcsDcpmR4Mjj9dEFPX3z7o9k1BVLVdWUJ4tpXJUgpSJI9%2ByvEBvuCIj6N5C14%2FmnxczHRvwyxoOLX%2BN3JqFlavWOxxtZvg7FRJafPyUm27eMYqXSk2FZ2gDR%2BA%3D%3D';

        // Prefixes and IDs
        var locationId = typeof glLocationId !== 'undefined' ? glLocationId : '{[location_id]}';
        var statsURL = typeof glStatsUrl !== 'undefined' ? glStatsUrl : '{[statsUrl]}';

        // Glads impression tracking url
        var gladsImpressionTrackingUrl = statsURL + '{[impTrackUrl]}';

        // GLOT tracking
        var gladsGlotTrackingImpressionUrl = '{[gladsGlotTrackingImpressionUrl]}';
        gladsGlotTrackingImpressionUrl = gladsGlotTrackingImpressionUrl.replace('%%location_id%%', locationId);
        var gladsGlotTrackingVideoCompleteUrl = '{[gladsGlotTrackingVideoCompleteUrl]}';

        // Partner's impression tracking url
        var partnerImpressionTrackingUrls = [];

        // Glads click tracking url
        var gladsClickTrackingUrl = statsURL + '{[clickTrackUrl]}';

        // Glads close image url
        var gladsCloseImageUrl = '{[closeImgUrl]}';

        // Incentivised video settings
        var gladsRewardSettings = {
            'rewardUrl': '{[rewardUrl]}',
            'rewardCurrency': '{[rewardCurrency]}',
            'notifyReward': 1
        };

        // Glads video info button url
        var gladsVideoInfoButtonImageUrl = '{[videoInfoButtonImageUrl]}';
        var gladsVideoCloseButtonImageUrl = gladsCloseImageUrl;

        // Glads video tracking urls
        var gladsTrackingUrls = {
            clickTrackingUrl: gladsClickTrackingUrl,
            firstQuartileTrackingURL: statsURL + "{[videoFirstQuartileTrackURL]}",
            midpointTrackingURL: statsURL + "{[videoMidpointTrackURL]}",
            thirdQuartileTrackingURL: statsURL + "{[videoThirdQuartileTrackURL]}",
            completeTrackingURL: statsURL + "{[videoCompleteTrackURL]}"
        };

        // Redirection cache
                var redirectionCache = {"vastErrors":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/ev\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=6BB765154D47AF3A6FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7&ec=[ERRORCODE]"],"impressions":["https:\/\/beacon-apac-hkg1.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=CBADCB97774921C6FEEA7013AD39315D29CBEA8B27A8D6F49D8AE83A3037F16461EFB89DEE45DE23EF807F03246F76754F9504C4F102AB578348BAA4A39AD7D3DDD4DF9E0A50F0BE2295A1199038AC767D57CC37354481C500E413EFFA6F10575E4E88B802F115E1BCA474645C6C874AA70F1E9501082B5DEC53F9EAF2EADCDE1A9D753B57C650E80286AC2E65F7BC19FC3BE8685EBA97EBBC7EB66E9D76AEBC6585CA8F89BC821E3C6A41FAC51416A01A3CB4992586C308DAFEE0F8DDAA7FD7F90735264263E351","https:\/\/cm.g.doubleclick.net\/pixel?google_nid=rubicon&google_cm&google_sc","https:\/\/rtd.tubemogul.com\/upi\/pid\/btu4jd3a?redir=https%3A%2F%2Fpixel.rubiconproject.com%2Ftap.php%3Fv%3D191940%26nid%3D3778%26put%3D%24%7BUSER_ID%7D","https:\/\/match.adsrvr.org\/track\/cmf\/rubicon?","https:\/\/sync.tidaltv.com\/GenericUserSync.ashx?dpid=695","https:\/\/sync.mathtag.com\/sync\/img?mt_exid=9&redir=https%3A%2F%2Fpixel.rubiconproject.com%2Ftap.php%3Fv%3D4222%26nid%3D1512%26put%3D%5BMM_UUID%5D","https:\/\/i.w55c.net\/ping_match.gif?ei=RUBICON&rurl=https%3A%2F%2Fpixel.rubiconproject.com%2Ftap.php%3Fv%3D4210%26nid%3D1523%26put%3D_wfivefivec_%26expires%3D30","https:\/\/track.eyeviewads.com\/sync\/rbcn?","https:\/\/secure.adnxs.com\/getuidnb?https%3A%2F%2Fpixel.rubiconproject.com%2Ftap.php%3Fv%3D109108%26nid%3D3876%26put%3D$UID%26expires%3D30"],"viewableImpressions":[],"notViewableImpressions":[],"undeterminedViewableImpressions":[],"trackingEvents":{"creativeView":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=498E45A22EEBCA46295E65220CB00E706FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7"],"start":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=61E545434C090DB66FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7"],"midpoint":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=2D6EF7C7B3D881A91806717B6C7A930E6087048DED59ACCD9D843F16FD1434EE39D8BC598A189FA92D5658BEE146A161DB7E91AA023F9472E696B759068465B9C52583A3A2F4F53FB75CC09AF4EEEFA3D995C213C7F238A1439EDA975FE3CC30F466CBF9AF962A1CAAFDD28CE3CF60EB319981C3B6F5ACB3FB6D79A2EBA5975AB70819DBB888F4FF4E26BA1F491ED8FAFF6554AED2AF2489E89A3959D0C991085955E6621D78BDE71285F962E60F6ACD57742605D80A589CEE73C056225015A0E82A954C1004678A"],"firstQuartile":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=C1A0864160A107F41C1F7AD7BB7BB8DCEB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"thirdQuartile":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=3ADD8F99CD2216801C1F7AD7BB7BB8DCEB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"complete":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=EF05D8E5B84FFBB01806717B6C7A930E6087048DED59ACCD9D843F16FD1434EE39D8BC598A189FA92D5658BEE146A161DB7E91AA023F9472E696B759068465B9C52583A3A2F4F53FB75CC09AF4EEEFA3D995C213C7F238A1439EDA975FE3CC30F466CBF9AF962A1CAAFDD28CE3CF60EB319981C3B6F5ACB3FB6D79A2EBA5975AB70819DBB888F4FF4E26BA1F491ED8FAFF6554AED2AF2489E89A3959D0C991085955E6621D78BDE71285F962E60F6ACD57742605D80A589CEE73C056225015A0E82A954C1004678A"],"mute":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=B9562371DB641C2B92B148F46769113B7733E3A43AAF8B76360EF450832DC8463F74C053A787C5506B96735BC73CE87B44B7ED6BEAB4822A59D74E9E049A4659FAA90D6583CB4E22B9877C42E4926008D6B941FB5AA0984E0EE62C083E04B0593E4AF488B9A63B6A1A589C73BCC55769041EEADAFAFF04EF4D39FA66EF3B86941F8006EF5F50FD76D54B2B95BEA47CC32C1E023E8D306E4EB401DDD53905CDE346912BC81B9448CBB99DF318EDC11D49D549790E27F6EDA979B97BCEABC6A68A"],"unmute":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=1229C12EAE25DB9CEB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"pause":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=F61A524FBDA745356FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7"],"rewind":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=DB6C37A5937E0E59EB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"resume":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=2788D26C9608AF18EB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"fullscreen":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=FB78FA73384AC4F6F2A47766399071B329CBEA8B27A8D6F49D8AE83A3037F16461EFB89DEE45DE23EF807F03246F76754F9504C4F102AB578348BAA4A39AD7D3DDD4DF9E0A50F0BE2295A1199038AC767D57CC37354481C500E413EFFA6F10575E4E88B802F115E1BCA474645C6C874AA70F1E9501082B5DEC53F9EAF2EADCDE1A9D753B57C650E80286AC2E65F7BC19FC3BE8685EBA97EBBC7EB66E9D76AEBC6585CA8F89BC821E3C6A41FAC51416A01A3CB4992586C308DAFEE0F8DDAA7FD7F90735264263E351"],"expand":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=DC9A895C75F03BA9EB17DE8A723FC9E50756DA939A9ACA249F634B809507B62293B770A633DA51530DC2BE15257AF7F4A24399622DFA5C62D028D336D9183CC08B73A3A583DBB3314894C808CF42EDF6C76C18CF3CEA8B0F1FE3794307533B2B4366053C2E5800D4224AD0EEA0EB78A496A61D47DD78D04AE89445702194480A379E5FBF9420DEE400C39E6F5AD22BB3B340386AA1C782FE4DCABD3B16FF83DDFF0F8D85C7482A97B8CA63DB2C49BAA759C0E5E765C5630EA9ED7144BD948146"],"collapse":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=C140A0DE32AE5E441806717B6C7A930E6087048DED59ACCD9D843F16FD1434EE39D8BC598A189FA92D5658BEE146A161DB7E91AA023F9472E696B759068465B9C52583A3A2F4F53FB75CC09AF4EEEFA3D995C213C7F238A1439EDA975FE3CC30F466CBF9AF962A1CAAFDD28CE3CF60EB319981C3B6F5ACB3FB6D79A2EBA5975AB70819DBB888F4FF4E26BA1F491ED8FAFF6554AED2AF2489E89A3959D0C991085955E6621D78BDE71285F962E60F6ACD57742605D80A589CEE73C056225015A0E82A954C1004678A"],"acceptInvitation":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=CB7F724D5631BC92B5E2858846470B46360D72BFB45C7AE5F43E6C591BF058E8CBBF771999773E50B120C9EDC50E33CF049DBCEB122BD1AC794EE44EFE85AB6243AA4E93BE5C186B175B38F6EC5F5E769942280DAA95D2CB87797B7B170BEB273890DC7827F1A0E8F46414B8BFC72D4285FE73900A8C3F401299FE51A22D22A3F0C5E4C0A79C6F9FFDB3DD10543F6C8097EA7604C63AC73024F5207A2458AD770837079181AB5444DF74AD1570AC12E8DC4A6E913E111F06CDED16396024C3E330F8ACCD4FCD044FCDA10306204D320B"],"close":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=A515869186F8F83E6FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7"]},"clickThrough":[],"clickTracking":["https:\/\/beacon-nf.rubiconproject.com\/beacon\/v\/2dc0241f-4c28-4dcf-81e6-cd8ed4a822af?oo=0&accountId=14554&siteId=80772&zoneId=405308&sizeId=201&e=D0E14F60048113B26FB4715ADF71D4A8305FC61731C5165E10E22447A4C19859DAF9CBC622F20B7F3DA47CC89A4A3EE34373D6191CFEF6EC4B47DD31A339A4EBC746AD30B347FF92F11216BE12F4E2297EBF7F03ECCF30506689557BA19E527D598D55261DDA01936F426B887BF3429EE22D800201DC68C71BEE748B37EC188EA9C4FC35A5661C1DF2EF6C051F2431C60EA561FC50C398C6EDC15384737F59C32D8F00E5AC03742E665D4A0CC3E6E8D68435503A00D71CDC6F4852B834FFA2B7"],"adVerifications":[]};

        if (typeof redirectionCache['trackingEvents'] === 'undefined') {
            redirectionCache['trackingEvents'] = {};
        }

        // Vast data
                var vastData = {"adSystem":{"value":"PlayTime","attributes":{"version":"1.0"}},"adTitle":{"value":"Upper-Funnel_New Audience_Adobe - Open Exchange_Video_Couple_25-54_Mobile_Onsen_:15_DB 2019 TW Q1-Contextual-mWeb - 237391545"},"adPricing":[],"mediaFile":{"url":"https:\/\/playtime.tubemogul.com\/ud\/prod\/ad_plugins\/release\/vpaidjsproxy-20190313.js?feedURL=https%3A%2F%2Fas-tm.everesttech.net%2Ffeed%2Fplacement.js%3Fid%3DbtXxJqnWClDtkAjBpZEd%26tm_auction_id%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26price%3D608A9EDC1FE6BD04%26test%3D%26bi%3DB08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK%26did%3D5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c%26didtype%3DADVERTISING_ID%26barefeed%3DT%26rand%3D1521877143%26seller_id%3D14554%26tm_user_ip%3D6156dd9bcf1f6c7cf25b6c4eaf473856%26expaId%3D%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA%26psId%3DUNXVu9lfiD5WPKwedMp7%26page_url%3D&cpKey=jRS0x7ZY6hVH5Krwmfcs&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi&framework=vpaid&psId=UNXVu9lfiD5WPKwedMp7&cd=%7B%22zip%22%3A%22UNKNOWN%22%2C%22fbd%22%3A%7B%22ssb%22%3A%22F%22%2C%22psb%22%3A%22F%22%2C%22pd%22%3A%22com.gameloft.android.ANMP.GloftM5HM%22%2C%22mpw%22%3A%221024%22%2C%22mph%22%3A%22768%22%2C%22aburl%22%3A%22%22%7D%7D&price=608A9EDC1FE6BD04&test=&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&pt=imp&cpId=685403&plcId=2050369&mpId=44337&adId=4117407632&psIdNum=654143&iasMon=F&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&didtype=ADVERTISING_ID&env=app&conn=wifi&videoURL=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Fpfadx%2FN3995.3107732ADOBE-OPENEXCHANGE%2FB22147261.237391545%3Bsz%3D0x0%3Bord%3D1521877143%3Bdc_lat%3D%3Bdc_rdid%3D%3Btag_for_child_directed_treatment%3D%3Btfua%3D%3Bdcmt%3Dtext%2Fxml","type":"application\/javascript","bitrate":"500","minBitrate":0,"maxBitrate":0,"duration":"00:00:30","width":"400","height":"300","orientation":"landscape","apiFramework":"vpaid","creative_id":"HitBVlXDgtK5AyBEbWWi"},"interactiveMediaFile":[],"vastErrors":["https:\/\/statsf-tm.everesttech.net\/stats\/1\/playererror?cpKey=jRS0x7ZY6hVH5Krwmfcs&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&service=adserver&errorcode=[ERRORCODE]&s=H4sIAAAAAAAAAAEQAe_-_25NPEVGMS-jza2YVNpXd4KrZu2RY0n-k5-ZPMcjFVZI_9nAmF5fl2iW0WbPH82L5am32r7PMi-X1NtcLsmI1CMpebNTbfxdk2nreWYSfUUPCUhB5BZ0lAcJNUON_NO16WgLaC9rlwGOMgtVtrjle_z57bvYzKkCwlaZwJ6nif0Nd6f8lk3TDx15ivcPke5cgW2BGstTl2FKkJF2YIn3694gFmE61T_oJwhNvlsItvimDcO9I0KUsBGCeWd6uvVBhi6EopmRr5zs6UNdzpyhxOgFWTC9acG-Geqspzh5z7fTSkzMtXZGmXMGNcZMHuXfNgc1qQsJv7FPoZgYWxc4ikMWJflu8U6OCMV-vRZzSGLsHOihEAEAAA"],"impressions":["https:\/\/rtb-lb-event-tm-hkg-tm.everesttech.net\/rtb\/e.png?e=win&aid=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cp=2050369&slot=1&x_price=608A9EDC1FE6BD04&ets=1553960344307&tz=Asia%2FChungking&source=rubicon&suid=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&country=TW&region=03&mc=48&ap=0&ut=0&vis=UNKNOWN&site=UNXVu9lfiD5WPKwedMp7&bp=30434780&curr=USD&exr=1.0&fid=btXxJqnWClDtkAjBpZEd&c=4117407632&ccurr=USD&cuxr=1.0&a=454447&ca=685403&st=INSTREAM%7CINSTREAM_MOBILE_VAST_INTER%7CPREROLL_SURVEY%7CINSTREAM_VPAID2_DESKTOP%7CINSTREAM_VPAID2_MOBILE%7CVPAID_JS&sh=768&sw=1024&rid=3566&mp=163&cfc=2&cfci=30&dur=61&cityid=77436&metroid=-1&countryid=214&postalid=-1&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&didtype=ADVERTISING_ID&duration=30&v=1&auth=5jt9jL2DzfdLFdPpFp_cWbXcgUs&x_r=kkQo1Q","https:\/\/playtime-tm.everesttech.net\/audit\/e.png?event=blank"],"viewableImpressions":[],"notViewableImpressions":[],"undeterminedViewableImpressions":[],"trackingEvents":[],"clickThrough":[],"clickTracking":[],"adVerifications":[{"vendor":"Moat"}],"adParameters":"{\"tm_feed\":{\"conn\":\"wifi\",\"mpKey\":\"btXxJqnWClDtkAjBpZEd\",\"tmCampaignIdNum\":685403,\"iasMon\":\"F\",\"adParts\":[{\"sequence\":1,\"assets\":[{\"mimeType\":\"image\/jpeg\",\"trackAsAutoplay\":\"T\",\"type\":\"promoted_video\",\"layer\":\"0\",\"timer\":30,\"ageGate\":\"null\",\"id\":\"12932328\",\"height\":\"300\",\"inplayCall\":\"bannerClicks\",\"videoDuration\":30,\"framework\":\"vpaid\",\"pvId\":\"5rCM5M2tZ6cA8liNgWKE\",\"width\":\"400\",\"preserveAspectRatio\":\"T\",\"x\":\"center\",\"y\":\"center\",\"showControls\":\"F\",\"resourceType\":\"static\"},{\"mimeType\":\"text\/html\",\"type\":\"companion\",\"layer\":\"1\",\"ageGate\":\"null\",\"id\":\"12932330\",\"height\":\"600\",\"inplayCall\":\"bannerClicks\",\"width\":\"300\",\"detail\":\"<!DOCTYPE html>\\n<html>\\n<head>\\n<\/head>\\n<body>\\n<script type=\\\"text\/javascript\\\">\\n    var shimSessionId = \\\"e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1\\\";\\n    var shimWidth =  \\\"${ASSET_WIDTH}\\\";\\n    var shimHeight =  \\\"${ASSET_HEIGHT}\\\";\\n    var shimSignature = shimSessionId + '.' + shimWidth + '.' + shimHeight;\\n    var companion;\\n    var matched = false;\\n\\n    var shimReady = function(){\\n        shimStatus = \\\"ready\\\";\\n    };\\n\\n    var receiveMessage = function(event){\\n        var tellAdUnit = function(status){\\n            var rand = Math.floor(Math.random()*1000000);\\n            event.source.postMessage({from:\\\"shim\\\", signature:shimSignature, status:status, rand:rand}, \\\"*\\\");\\n        };\\n        companion = event.data;\\n        if ( !matched && companion.signature == shimSignature ){\\n            matched == true;\\n            tellAdUnit(\\\"matched\\\");\\n            removeEvent( window, \\\"message\\\", receiveMessage);\\n            try {\\n                switch (companion.resourceType) {\\n                    case 'HTMLResource':\\n                        document.body.innerHTML = unescape(companion.resource);\\n                        sendViewPixels();\\n                        break;\\n                    case 'IFrameResource':\\n                        var iframe = appendElementSrc(\\\"iframe\\\", companion.resource, sendViewPixels);\\n                        iframe.width = companion.width;\\n                        iframe.height = companion.height;\\n                        iframe.frameborder = \\\"0\\\";\\n                        iframe.scrolling = \\\"no\\\";\\n                        iframe.marginheight = \\\"0\\\";\\n                        iframe.marginwidth = \\\"0\\\";\\n                        iframe.style = \\\"border: 0px; margin: 0px;\\\";\\n                        break;\\n                    case 'StaticResource':\\n                        var type = companion.mimeType.toLowerCase().split(\\\"\/\\\");\\n                        switch (type[0]) {\\n                            case \\\"image\\\" :\\n                                var img = appendElementSrc(\\\"img\\\", companion.resource, sendViewPixels);\\n                                img.width = shimWidth;\\n                                img.height = shimHeight;\\n                                img.onclick = performClickThru;\\n                                break;\\n                            case \\\"application\\\" :\\n                                switch (type[1]) {\\n                                    case \\\"x-javascript\\\":\\n                                        appendElementSrc(\\\"script\\\", companion.resource, sendViewPixels);\\n                                        break;\\n                                    case \\\"x-shockwave-flash\\\":\\n                                        appendElementSrc(\\\"script\\\", \\\"https:\/\/playtime.tubemogul.com\/flash\/swfobject.js\\\", loadSwf);\\n                                        break;\\n                                    default:\\n                                        console.log(\\\"Unrecognized StaticResource mimeType : \\\" + companion.mimeType);\\n                                        break;\\n                                }\\n                                break;\\n                            default :\\n                                break;\\n                        }\\n                    default :\\n                        break;\\n                }\\n                tellAdUnit(\\\"loaded\\\");\\n            }catch(e){\\n                \/\/ Ad unit may send a better matching companion\\n                tellAdUnit(\\\"failed\\\");\\n                addEvent( window, \\\"message\\\", receiveMessage);\\n                matched == false;\\n                shimStatus = \\\"ready\\\";\\n            }\\n        }\\n    };\\n\\n    function performClickThru(){\\n        var win = window.open(companion.clickThrough, '_blank');\\n        win.focus();\\n    }\\n\\n    function sendViewPixels(){\\n        for (var pixel in companion.creativeView){\\n            appendElementSrc(\\\"pixel\\\", companion.creativeView[pixel]);\\n        }\\n        appendElementSrc(\\\"pixel\\\",\\\"${PIXEL_COMP_IMP}\\\");\\n    }\\n\\n    function appendElementSrc(el_type, src, onload){\\n        var el;\\n        if (el_type == \\\"pixel\\\") {\\n            el = document.createElement(\\\"img\\\");\\n            el.width = el.height = 1;\\n        }else {\\n            el = document.createElement(el_type);\\n        }\\n        el.src = src;\\n        if (onload != undefined){\\n            el.onload = onload;\\n        }\\n        document.body.appendChild(el);\\n        return el;\\n    }\\n\\n    function loadSwf(){\\n        var strWidth = shimWidth.toString();\\n        var strHeight = shimHeight.toString();\\n        var random = Math.floor(Math.random()*100000);\\n        var div = document.createElement('div');\\n        var divId = shimSignature + \\\".\\\" + random; \/\/Will be replaced by swfObject-created <object> tag with same ID\\n        div.id = divId;\\n        document.body.appendChild(div);\\n        var flashvars = {};\\n        if (companion.apiFramework == \\\"clickTAG\\\" ) {\\n            flashvars = {clickTAG:companion.clickThrough};\\n        }\\n\\n        if (companion.apiFramework.toLowerCase() == \\\"flashvars\\\" && companion.adParameters){\\n            \/\/ ToDo: FTSO .. How are adParameters formatted as flashvars? json? qparams? is xml a valid format for flashvars?\\n            \/\/ ToDo:      .. or is the entire adParams string meant to be passed in as a single flashvar?\\n            \/\/ ToDo:      .. If so with what property name? 'adParameters' ? .. and let the swf decode it?\\n        }\\n        var params = {\\n            wmode: \\\"transparent\\\",\\n            allowfullscreen: \\\"true\\\",\\n            allowscriptaccess: \\\"always\\\"\\n        };\\n        swfobject.embedSWF(companion.resource, divId, strWidth, strHeight, \\\"9.0.0\\\",\\\"https:\/\/playtime.tubemogul.com\/flash\/expressInstall.swf\\\", flashvars, params);\\n        sendViewPixels();\\n    }\\n\\n    \/\/ More Cross Browser fun  ... ( Come back Flash! ... All is forgiven :) )\\n    function addEvent( obj, type, fn ) {\\n        if ( obj.attachEvent ) {\\n            obj['e'+type+fn] = fn;\\n            obj[type+fn] = function(){obj['e'+type+fn]( window.event );};\\n            obj.attachEvent( 'on'+type, obj[type+fn] );\\n        } else\\n            obj.addEventListener( type, fn, false );\\n    }\\n    function removeEvent( obj, type, fn ) {\\n        if ( obj.detachEvent ) {\\n            obj.detachEvent( 'on'+type, obj[type+fn] );\\n            obj[type+fn] = null;\\n        } else\\n            obj.removeEventListener( type, fn, false );\\n    }\\n\\n    addEvent( window, \\\"message\\\", receiveMessage);\\n<\/script>\\n<\/body>\\n<\/html>\",\"resourceType\":\"3rd_party_html\"},{\"mimeType\":\"text\/html\",\"type\":\"companion\",\"layer\":\"1\",\"ageGate\":\"null\",\"id\":\"12932331\",\"height\":\"250\",\"inplayCall\":\"bannerClicks\",\"width\":\"300\",\"detail\":\"<!DOCTYPE html>\\n<html>\\n<head>\\n<\/head>\\n<body>\\n<script type=\\\"text\/javascript\\\">\\n    var shimSessionId = \\\"e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1\\\";\\n    var shimWidth =  \\\"${ASSET_WIDTH}\\\";\\n    var shimHeight =  \\\"${ASSET_HEIGHT}\\\";\\n    var shimSignature = shimSessionId + '.' + shimWidth + '.' + shimHeight;\\n    var companion;\\n    var matched = false;\\n\\n    var shimReady = function(){\\n        shimStatus = \\\"ready\\\";\\n    };\\n\\n    var receiveMessage = function(event){\\n        var tellAdUnit = function(status){\\n            var rand = Math.floor(Math.random()*1000000);\\n            event.source.postMessage({from:\\\"shim\\\", signature:shimSignature, status:status, rand:rand}, \\\"*\\\");\\n        };\\n        companion = event.data;\\n        if ( !matched && companion.signature == shimSignature ){\\n            matched == true;\\n            tellAdUnit(\\\"matched\\\");\\n            removeEvent( window, \\\"message\\\", receiveMessage);\\n            try {\\n                switch (companion.resourceType) {\\n                    case 'HTMLResource':\\n                        document.body.innerHTML = unescape(companion.resource);\\n                        sendViewPixels();\\n                        break;\\n                    case 'IFrameResource':\\n                        var iframe = appendElementSrc(\\\"iframe\\\", companion.resource, sendViewPixels);\\n                        iframe.width = companion.width;\\n                        iframe.height = companion.height;\\n                        iframe.frameborder = \\\"0\\\";\\n                        iframe.scrolling = \\\"no\\\";\\n                        iframe.marginheight = \\\"0\\\";\\n                        iframe.marginwidth = \\\"0\\\";\\n                        iframe.style = \\\"border: 0px; margin: 0px;\\\";\\n                        break;\\n                    case 'StaticResource':\\n                        var type = companion.mimeType.toLowerCase().split(\\\"\/\\\");\\n                        switch (type[0]) {\\n                            case \\\"image\\\" :\\n                                var img = appendElementSrc(\\\"img\\\", companion.resource, sendViewPixels);\\n                                img.width = shimWidth;\\n                                img.height = shimHeight;\\n                                img.onclick = performClickThru;\\n                                break;\\n                            case \\\"application\\\" :\\n                                switch (type[1]) {\\n                                    case \\\"x-javascript\\\":\\n                                        appendElementSrc(\\\"script\\\", companion.resource, sendViewPixels);\\n                                        break;\\n                                    case \\\"x-shockwave-flash\\\":\\n                                        appendElementSrc(\\\"script\\\", \\\"https:\/\/playtime.tubemogul.com\/flash\/swfobject.js\\\", loadSwf);\\n                                        break;\\n                                    default:\\n                                        console.log(\\\"Unrecognized StaticResource mimeType : \\\" + companion.mimeType);\\n                                        break;\\n                                }\\n                                break;\\n                            default :\\n                                break;\\n                        }\\n                    default :\\n                        break;\\n                }\\n                tellAdUnit(\\\"loaded\\\");\\n            }catch(e){\\n                \/\/ Ad unit may send a better matching companion\\n                tellAdUnit(\\\"failed\\\");\\n                addEvent( window, \\\"message\\\", receiveMessage);\\n                matched == false;\\n                shimStatus = \\\"ready\\\";\\n            }\\n        }\\n    };\\n\\n    function performClickThru(){\\n        var win = window.open(companion.clickThrough, '_blank');\\n        win.focus();\\n    }\\n\\n    function sendViewPixels(){\\n        for (var pixel in companion.creativeView){\\n            appendElementSrc(\\\"pixel\\\", companion.creativeView[pixel]);\\n        }\\n        appendElementSrc(\\\"pixel\\\",\\\"${PIXEL_COMP_IMP}\\\");\\n    }\\n\\n    function appendElementSrc(el_type, src, onload){\\n        var el;\\n        if (el_type == \\\"pixel\\\") {\\n            el = document.createElement(\\\"img\\\");\\n            el.width = el.height = 1;\\n        }else {\\n            el = document.createElement(el_type);\\n        }\\n        el.src = src;\\n        if (onload != undefined){\\n            el.onload = onload;\\n        }\\n        document.body.appendChild(el);\\n        return el;\\n    }\\n\\n    function loadSwf(){\\n        var strWidth = shimWidth.toString();\\n        var strHeight = shimHeight.toString();\\n        var random = Math.floor(Math.random()*100000);\\n        var div = document.createElement('div');\\n        var divId = shimSignature + \\\".\\\" + random; \/\/Will be replaced by swfObject-created <object> tag with same ID\\n        div.id = divId;\\n        document.body.appendChild(div);\\n        var flashvars = {};\\n        if (companion.apiFramework == \\\"clickTAG\\\" ) {\\n            flashvars = {clickTAG:companion.clickThrough};\\n        }\\n\\n        if (companion.apiFramework.toLowerCase() == \\\"flashvars\\\" && companion.adParameters){\\n            \/\/ ToDo: FTSO .. How are adParameters formatted as flashvars? json? qparams? is xml a valid format for flashvars?\\n            \/\/ ToDo:      .. or is the entire adParams string meant to be passed in as a single flashvar?\\n            \/\/ ToDo:      .. If so with what property name? 'adParameters' ? .. and let the swf decode it?\\n        }\\n        var params = {\\n            wmode: \\\"transparent\\\",\\n            allowfullscreen: \\\"true\\\",\\n            allowscriptaccess: \\\"always\\\"\\n        };\\n        swfobject.embedSWF(companion.resource, divId, strWidth, strHeight, \\\"9.0.0\\\",\\\"https:\/\/playtime.tubemogul.com\/flash\/expressInstall.swf\\\", flashvars, params);\\n        sendViewPixels();\\n    }\\n\\n    \/\/ More Cross Browser fun  ... ( Come back Flash! ... All is forgiven :) )\\n    function addEvent( obj, type, fn ) {\\n        if ( obj.attachEvent ) {\\n            obj['e'+type+fn] = fn;\\n            obj[type+fn] = function(){obj['e'+type+fn]( window.event );};\\n            obj.attachEvent( 'on'+type, obj[type+fn] );\\n        } else\\n            obj.addEventListener( type, fn, false );\\n    }\\n    function removeEvent( obj, type, fn ) {\\n        if ( obj.detachEvent ) {\\n            obj.detachEvent( 'on'+type, obj[type+fn] );\\n            obj[type+fn] = null;\\n        } else\\n            obj.removeEventListener( type, fn, false );\\n    }\\n\\n    addEvent( window, \\\"message\\\", receiveMessage);\\n<\/script>\\n<\/body>\\n<\/html>\",\"resourceType\":\"3rd_party_html\"},{\"mimeType\":\"text\/html\",\"type\":\"companion\",\"layer\":\"1\",\"ageGate\":\"null\",\"id\":\"12932332\",\"height\":\"60\",\"inplayCall\":\"bannerClicks\",\"width\":\"300\",\"detail\":\"<!DOCTYPE html>\\n<html>\\n<head>\\n<\/head>\\n<body>\\n<script type=\\\"text\/javascript\\\">\\n    var shimSessionId = \\\"e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1\\\";\\n    var shimWidth =  \\\"${ASSET_WIDTH}\\\";\\n    var shimHeight =  \\\"${ASSET_HEIGHT}\\\";\\n    var shimSignature = shimSessionId + '.' + shimWidth + '.' + shimHeight;\\n    var companion;\\n    var matched = false;\\n\\n    var shimReady = function(){\\n        shimStatus = \\\"ready\\\";\\n    };\\n\\n    var receiveMessage = function(event){\\n        var tellAdUnit = function(status){\\n            var rand = Math.floor(Math.random()*1000000);\\n            event.source.postMessage({from:\\\"shim\\\", signature:shimSignature, status:status, rand:rand}, \\\"*\\\");\\n        };\\n        companion = event.data;\\n        if ( !matched && companion.signature == shimSignature ){\\n            matched == true;\\n            tellAdUnit(\\\"matched\\\");\\n            removeEvent( window, \\\"message\\\", receiveMessage);\\n            try {\\n                switch (companion.resourceType) {\\n                    case 'HTMLResource':\\n                        document.body.innerHTML = unescape(companion.resource);\\n                        sendViewPixels();\\n                        break;\\n                    case 'IFrameResource':\\n                        var iframe = appendElementSrc(\\\"iframe\\\", companion.resource, sendViewPixels);\\n                        iframe.width = companion.width;\\n                        iframe.height = companion.height;\\n                        iframe.frameborder = \\\"0\\\";\\n                        iframe.scrolling = \\\"no\\\";\\n                        iframe.marginheight = \\\"0\\\";\\n                        iframe.marginwidth = \\\"0\\\";\\n                        iframe.style = \\\"border: 0px; margin: 0px;\\\";\\n                        break;\\n                    case 'StaticResource':\\n                        var type = companion.mimeType.toLowerCase().split(\\\"\/\\\");\\n                        switch (type[0]) {\\n                            case \\\"image\\\" :\\n                                var img = appendElementSrc(\\\"img\\\", companion.resource, sendViewPixels);\\n                                img.width = shimWidth;\\n                                img.height = shimHeight;\\n                                img.onclick = performClickThru;\\n                                break;\\n                            case \\\"application\\\" :\\n                                switch (type[1]) {\\n                                    case \\\"x-javascript\\\":\\n                                        appendElementSrc(\\\"script\\\", companion.resource, sendViewPixels);\\n                                        break;\\n                                    case \\\"x-shockwave-flash\\\":\\n                                        appendElementSrc(\\\"script\\\", \\\"https:\/\/playtime.tubemogul.com\/flash\/swfobject.js\\\", loadSwf);\\n                                        break;\\n                                    default:\\n                                        console.log(\\\"Unrecognized StaticResource mimeType : \\\" + companion.mimeType);\\n                                        break;\\n                                }\\n                                break;\\n                            default :\\n                                break;\\n                        }\\n                    default :\\n                        break;\\n                }\\n                tellAdUnit(\\\"loaded\\\");\\n            }catch(e){\\n                \/\/ Ad unit may send a better matching companion\\n                tellAdUnit(\\\"failed\\\");\\n                addEvent( window, \\\"message\\\", receiveMessage);\\n                matched == false;\\n                shimStatus = \\\"ready\\\";\\n            }\\n        }\\n    };\\n\\n    function performClickThru(){\\n        var win = window.open(companion.clickThrough, '_blank');\\n        win.focus();\\n    }\\n\\n    function sendViewPixels(){\\n        for (var pixel in companion.creativeView){\\n            appendElementSrc(\\\"pixel\\\", companion.creativeView[pixel]);\\n        }\\n        appendElementSrc(\\\"pixel\\\",\\\"${PIXEL_COMP_IMP}\\\");\\n    }\\n\\n    function appendElementSrc(el_type, src, onload){\\n        var el;\\n        if (el_type == \\\"pixel\\\") {\\n            el = document.createElement(\\\"img\\\");\\n            el.width = el.height = 1;\\n        }else {\\n            el = document.createElement(el_type);\\n        }\\n        el.src = src;\\n        if (onload != undefined){\\n            el.onload = onload;\\n        }\\n        document.body.appendChild(el);\\n        return el;\\n    }\\n\\n    function loadSwf(){\\n        var strWidth = shimWidth.toString();\\n        var strHeight = shimHeight.toString();\\n        var random = Math.floor(Math.random()*100000);\\n        var div = document.createElement('div');\\n        var divId = shimSignature + \\\".\\\" + random; \/\/Will be replaced by swfObject-created <object> tag with same ID\\n        div.id = divId;\\n        document.body.appendChild(div);\\n        var flashvars = {};\\n        if (companion.apiFramework == \\\"clickTAG\\\" ) {\\n            flashvars = {clickTAG:companion.clickThrough};\\n        }\\n\\n        if (companion.apiFramework.toLowerCase() == \\\"flashvars\\\" && companion.adParameters){\\n            \/\/ ToDo: FTSO .. How are adParameters formatted as flashvars? json? qparams? is xml a valid format for flashvars?\\n            \/\/ ToDo:      .. or is the entire adParams string meant to be passed in as a single flashvar?\\n            \/\/ ToDo:      .. If so with what property name? 'adParameters' ? .. and let the swf decode it?\\n        }\\n        var params = {\\n            wmode: \\\"transparent\\\",\\n            allowfullscreen: \\\"true\\\",\\n            allowscriptaccess: \\\"always\\\"\\n        };\\n        swfobject.embedSWF(companion.resource, divId, strWidth, strHeight, \\\"9.0.0\\\",\\\"https:\/\/playtime.tubemogul.com\/flash\/expressInstall.swf\\\", flashvars, params);\\n        sendViewPixels();\\n    }\\n\\n    \/\/ More Cross Browser fun  ... ( Come back Flash! ... All is forgiven :) )\\n    function addEvent( obj, type, fn ) {\\n        if ( obj.attachEvent ) {\\n            obj['e'+type+fn] = fn;\\n            obj[type+fn] = function(){obj['e'+type+fn]( window.event );};\\n            obj.attachEvent( 'on'+type, obj[type+fn] );\\n        } else\\n            obj.addEventListener( type, fn, false );\\n    }\\n    function removeEvent( obj, type, fn ) {\\n        if ( obj.detachEvent ) {\\n            obj.detachEvent( 'on'+type, obj[type+fn] );\\n            obj[type+fn] = null;\\n        } else\\n            obj.removeEventListener( type, fn, false );\\n    }\\n\\n    addEvent( window, \\\"message\\\", receiveMessage);\\n<\/script>\\n<\/body>\\n<\/html>\",\"resourceType\":\"3rd_party_html\"},{\"mimeType\":\"text\/html\",\"type\":\"companion\",\"layer\":\"1\",\"ageGate\":\"null\",\"id\":\"12932333\",\"height\":\"90\",\"inplayCall\":\"bannerClicks\",\"width\":\"728\",\"detail\":\"<!DOCTYPE html>\\n<html>\\n<head>\\n<\/head>\\n<body>\\n<script type=\\\"text\/javascript\\\">\\n    var shimSessionId = \\\"e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1\\\";\\n    var shimWidth =  \\\"${ASSET_WIDTH}\\\";\\n    var shimHeight =  \\\"${ASSET_HEIGHT}\\\";\\n    var shimSignature = shimSessionId + '.' + shimWidth + '.' + shimHeight;\\n    var companion;\\n    var matched = false;\\n\\n    var shimReady = function(){\\n        shimStatus = \\\"ready\\\";\\n    };\\n\\n    var receiveMessage = function(event){\\n        var tellAdUnit = function(status){\\n            var rand = Math.floor(Math.random()*1000000);\\n            event.source.postMessage({from:\\\"shim\\\", signature:shimSignature, status:status, rand:rand}, \\\"*\\\");\\n        };\\n        companion = event.data;\\n        if ( !matched && companion.signature == shimSignature ){\\n            matched == true;\\n            tellAdUnit(\\\"matched\\\");\\n            removeEvent( window, \\\"message\\\", receiveMessage);\\n            try {\\n                switch (companion.resourceType) {\\n                    case 'HTMLResource':\\n                        document.body.innerHTML = unescape(companion.resource);\\n                        sendViewPixels();\\n                        break;\\n                    case 'IFrameResource':\\n                        var iframe = appendElementSrc(\\\"iframe\\\", companion.resource, sendViewPixels);\\n                        iframe.width = companion.width;\\n                        iframe.height = companion.height;\\n                        iframe.frameborder = \\\"0\\\";\\n                        iframe.scrolling = \\\"no\\\";\\n                        iframe.marginheight = \\\"0\\\";\\n                        iframe.marginwidth = \\\"0\\\";\\n                        iframe.style = \\\"border: 0px; margin: 0px;\\\";\\n                        break;\\n                    case 'StaticResource':\\n                        var type = companion.mimeType.toLowerCase().split(\\\"\/\\\");\\n                        switch (type[0]) {\\n                            case \\\"image\\\" :\\n                                var img = appendElementSrc(\\\"img\\\", companion.resource, sendViewPixels);\\n                                img.width = shimWidth;\\n                                img.height = shimHeight;\\n                                img.onclick = performClickThru;\\n                                break;\\n                            case \\\"application\\\" :\\n                                switch (type[1]) {\\n                                    case \\\"x-javascript\\\":\\n                                        appendElementSrc(\\\"script\\\", companion.resource, sendViewPixels);\\n                                        break;\\n                                    case \\\"x-shockwave-flash\\\":\\n                                        appendElementSrc(\\\"script\\\", \\\"https:\/\/playtime.tubemogul.com\/flash\/swfobject.js\\\", loadSwf);\\n                                        break;\\n                                    default:\\n                                        console.log(\\\"Unrecognized StaticResource mimeType : \\\" + companion.mimeType);\\n                                        break;\\n                                }\\n                                break;\\n                            default :\\n                                break;\\n                        }\\n                    default :\\n                        break;\\n                }\\n                tellAdUnit(\\\"loaded\\\");\\n            }catch(e){\\n                \/\/ Ad unit may send a better matching companion\\n                tellAdUnit(\\\"failed\\\");\\n                addEvent( window, \\\"message\\\", receiveMessage);\\n                matched == false;\\n                shimStatus = \\\"ready\\\";\\n            }\\n        }\\n    };\\n\\n    function performClickThru(){\\n        var win = window.open(companion.clickThrough, '_blank');\\n        win.focus();\\n    }\\n\\n    function sendViewPixels(){\\n        for (var pixel in companion.creativeView){\\n            appendElementSrc(\\\"pixel\\\", companion.creativeView[pixel]);\\n        }\\n        appendElementSrc(\\\"pixel\\\",\\\"${PIXEL_COMP_IMP}\\\");\\n    }\\n\\n    function appendElementSrc(el_type, src, onload){\\n        var el;\\n        if (el_type == \\\"pixel\\\") {\\n            el = document.createElement(\\\"img\\\");\\n            el.width = el.height = 1;\\n        }else {\\n            el = document.createElement(el_type);\\n        }\\n        el.src = src;\\n        if (onload != undefined){\\n            el.onload = onload;\\n        }\\n        document.body.appendChild(el);\\n        return el;\\n    }\\n\\n    function loadSwf(){\\n        var strWidth = shimWidth.toString();\\n        var strHeight = shimHeight.toString();\\n        var random = Math.floor(Math.random()*100000);\\n        var div = document.createElement('div');\\n        var divId = shimSignature + \\\".\\\" + random; \/\/Will be replaced by swfObject-created <object> tag with same ID\\n        div.id = divId;\\n        document.body.appendChild(div);\\n        var flashvars = {};\\n        if (companion.apiFramework == \\\"clickTAG\\\" ) {\\n            flashvars = {clickTAG:companion.clickThrough};\\n        }\\n\\n        if (companion.apiFramework.toLowerCase() == \\\"flashvars\\\" && companion.adParameters){\\n            \/\/ ToDo: FTSO .. How are adParameters formatted as flashvars? json? qparams? is xml a valid format for flashvars?\\n            \/\/ ToDo:      .. or is the entire adParams string meant to be passed in as a single flashvar?\\n            \/\/ ToDo:      .. If so with what property name? 'adParameters' ? .. and let the swf decode it?\\n        }\\n        var params = {\\n            wmode: \\\"transparent\\\",\\n            allowfullscreen: \\\"true\\\",\\n            allowscriptaccess: \\\"always\\\"\\n        };\\n        swfobject.embedSWF(companion.resource, divId, strWidth, strHeight, \\\"9.0.0\\\",\\\"https:\/\/playtime.tubemogul.com\/flash\/expressInstall.swf\\\", flashvars, params);\\n        sendViewPixels();\\n    }\\n\\n    \/\/ More Cross Browser fun  ... ( Come back Flash! ... All is forgiven :) )\\n    function addEvent( obj, type, fn ) {\\n        if ( obj.attachEvent ) {\\n            obj['e'+type+fn] = fn;\\n            obj[type+fn] = function(){obj['e'+type+fn]( window.event );};\\n            obj.attachEvent( 'on'+type, obj[type+fn] );\\n        } else\\n            obj.addEventListener( type, fn, false );\\n    }\\n    function removeEvent( obj, type, fn ) {\\n        if ( obj.detachEvent ) {\\n            obj.detachEvent( 'on'+type, obj[type+fn] );\\n            obj[type+fn] = null;\\n        } else\\n            obj.removeEventListener( type, fn, false );\\n    }\\n\\n    addEvent( window, \\\"message\\\", receiveMessage);\\n<\/script>\\n<\/body>\\n<\/html>\",\"resourceType\":\"3rd_party_html\"}],\"width\":\"100%\",\"type\":\"player\",\"height\":\"100%\"}],\"vtrusted\":\"f\",\"sellerId\":\"14554\",\"cpKey\":\"jRS0x7ZY6hVH5Krwmfcs\",\"feedId\":\"btXxJqnWClDtkAjBpZEd\",\"zone\":\"tm-hkg-1a\",\"price\":\"608A9EDC1FE6BD04\",\"campaignKey\":\"25hJsUiJSF8j5ye9bxrV\",\"height\":300,\"thirdPartyFiresImp\":\"f\",\"viewabilityStandard\":\"MRC\",\"displayType\":\"vast_proxy\",\"pixels\":[],\"bidderGroup\":\"rtb-bidder-display\",\"adKey\":\"HitBVlXDgtK5AyBEbWWi\",\"assetBaseURL\":\"\/\/playtime.tubemogul.com\",\"tmSiteIdNum\":\"654143\",\"tmPlacementIdNum\":2050369,\"preview\":false,\"statsPixels\":[{\"id\":0,\"trigger\":\"Impression\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/imp?price=608A9EDC1FE6BD04&ssb=F&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":1,\"trigger\":\"Vimp\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/vimp?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":2,\"trigger\":\"View\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/view?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&pvId=1&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":3,\"trigger\":\"ClickThrough\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/ct?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&stch_id=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":4,\"trigger\":\"Complete25\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/pct25?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&pvId=1&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":5,\"trigger\":\"Complete50\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/pct50?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&pvId=1&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":6,\"trigger\":\"Complete75\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/pct75?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&pvId=1&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":7,\"trigger\":\"Completion\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/pct100?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&pvId=1&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":8,\"trigger\":\"SurveyImpression\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/svyimp?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":9,\"trigger\":\"SurveyStart\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/svystart?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":10,\"trigger\":\"SurveyComplete\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/svycomp?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":11,\"trigger\":\"SurveyResponse\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/svyresp?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":12,\"trigger\":\"reject\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/reject?price=608A9EDC1FE6BD04&ssb=T&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&feedId=btXxJqnWClDtkAjBpZEd&msg=Rejected%20Ad&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&p2=&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":13,\"trigger\":\"eng\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/eng?price=608A9EDC1FE6BD04&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"},{\"id\":14,\"trigger\":\"TechTracker\",\"detail\":\"https:\/\/statsf-tm.everesttech.net\/stats\/1\/tt?price=608A9EDC1FE6BD04&ssb=F&vinst=t&rt=HTML5&s=H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA&env=app&psId=UNXVu9lfiD5WPKwedMp7&did=5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c&bi=B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&cpKey=jRS0x7ZY6hVH5Krwmfcs&date=1553960344578&didtype=ADVERTISING_ID&conn=wifi&seller_id=14554&auth=71eddfc1287d2e783091817769d58c4d&mpKey=btXxJqnWClDtkAjBpZEd&adKey=HitBVlXDgtK5AyBEbWWi\",\"type\":\"stats\"}],\"session\":{\"host\":\"as.tubemogul.com\",\"sessId\":\"e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1\"},\"closeButtonDelay\":0,\"bi\":\"B08Ps0UDDJHofza9fNwBGUfx-D2Q4xchJ0bzLEuO6NrvurXlv6lGLgK-C7DNmLiJnxz7Q4v2SHfqZf1PZakIs2c-Xj_lhqU7_PqJvrTrmHNbIiN2sKx8J4eDUE8LYTr2F-GSXqsbnFADHEUZ_G7OeHszEzzeoEx_mkkfraGxUOSjFl1grkwSVdV-X1kzSy9TKn18oPWpnuRdv4zNEgdnyIcTUQgXLtKaeYlGAj7jeLYFRv8xuguT6_UZhj-xTfJwnrK\",\"psId\":\"UNXVu9lfiD5WPKwedMp7\",\"bt\":true,\"tmFeedIdNum\":44337,\"adClass\":\"interactive_preroll\",\"tmAdKey\":\"HitBVlXDgtK5AyBEbWWi\",\"wmode\":\"window\",\"moatEnabled\":\"F\",\"tmPlacementKey\":\"jRS0x7ZY6hVH5Krwmfcs\",\"tmAdIdNum\":4117407632,\"cd\":{\"fbd\":{\"ssb\":\"F\",\"aburl\":\"\"}},\"adPluginURL\":\"https:\/\/playtime.tubemogul.com\/ud\/prod\/ad_plugins\/release\/vpaidjsproxy-20190313.js\",\"bidderHost\":\"rtb-bidder-display119\",\"didtype\":\"ADVERTISING_ID\",\"env\":\"app\",\"statsBaseURL\":\"statsf-tm.everesttech.net\/stats\/1\",\"s\":\"H4sIAAAAAAAAAAEQAe_-k06u-beZUgu9KNxHc3Mzz1LAESfLYJKDs1FF5bdqr-qQL88eLLFm8Hwl-qVlgA5Em5-z8AUtBUwyko7RcIRfOlyOSRszYnZYQonSpHtL6CvK733p-TGDZ_-GOkXoTiQCD2MOFA0hlSAv-60OuoXRlADsKJvpKU8xEtIpczmfpDz_IrFfOTYl9mSbyySE_E36j4sErv9YAymwH3qvsxcMwF6YaRFCnoCIeJCQLsb5dSnqx8W3XThXfccTs7-S9Jw51bQRKmuTFc5IZlI_wQn99NOJG-usp0TFDa3evUyMBAM7GmZ_vBDgSqeY_syY_v8tx8XyPRL0_5CKBXSPgho79pXEJm-7M14Awg2BbjVFDwsr0wtdEAEAAA\",\"adUnitFireTechPixel\":\"t\",\"width\":400,\"did\":\"5811fe1a-e18f-4fe2-9f3a-be58d4b29c5c\"}}","companionAds":[{"width":"300","height":"600","HTMLResource":{"markup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"600\" src=\"http:\/\/201205igp.gameloft.com\/redir\/ecomm\/p.php?p=CompanionAds&l=1&u=https%3A%2F%2Fdisplay-tm.everesttech.net%2Fiframe%3FsessId%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26assetId%3D12932330%26psId%3DUNXVu9lfiD5WPKwedMp7%26bt%3Dt%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA%26bundle%3Dcom.gameloft.android.ANMP.GloftM5HM%26env%3Dapp%26conn%3Dwifi\"><\/iframe>","originalMarkup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"600\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932330&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"300","height":"600","IFrameResource":{"url":"http:\/\/201205igp.gameloft.com\/redir\/ecomm\/p.php?p=CompanionAds&l=1&u=https%3A%2F%2Fdisplay-tm.everesttech.net%2Fiframe%3FassetId%3D12932330%26sessId%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26psId%3DUNXVu9lfiD5WPKwedMp7%26bt%3Dt%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA","originalUrl":"https:\/\/display-tm.everesttech.net\/iframe?assetId=12932330&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"300","height":"250","HTMLResource":{"markup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"250\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932331&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>","originalMarkup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"250\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932331&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"300","height":"250","IFrameResource":{"url":"http:\/\/201205igp.gameloft.com\/redir\/ecomm\/p.php?p=CompanionAds&l=1&u=https%3A%2F%2Fdisplay-tm.everesttech.net%2Fiframe%3FassetId%3D12932331%26sessId%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26psId%3DUNXVu9lfiD5WPKwedMp7%26bt%3Dt%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA","originalUrl":"https:\/\/display-tm.everesttech.net\/iframe?assetId=12932331&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"300","height":"60","HTMLResource":{"markup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"60\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932332&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>","originalMarkup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"300\" height=\"60\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932332&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"300","height":"60","IFrameResource":{"url":"http:\/\/201205igp.gameloft.com\/redir\/ecomm\/p.php?p=CompanionAds&l=1&u=https%3A%2F%2Fdisplay-tm.everesttech.net%2Fiframe%3FassetId%3D12932332%26sessId%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26psId%3DUNXVu9lfiD5WPKwedMp7%26bt%3Dt%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA","originalUrl":"https:\/\/display-tm.everesttech.net\/iframe?assetId=12932332&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"728","height":"90","HTMLResource":{"markup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"728\" height=\"90\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932333&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>","originalMarkup":"<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" style=\"border: 0px; margin: 0px;\" width=\"728\" height=\"90\" src=\"https:\/\/display-tm.everesttech.net\/iframe?sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&assetId=12932333&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA&bundle=com.gameloft.android.ANMP.GloftM5HM&env=app&conn=wifi\"><\/iframe>"},"trackingEvents":[],"clickthroughTracking":[]},{"width":"728","height":"90","IFrameResource":{"url":"http:\/\/201205igp.gameloft.com\/redir\/ecomm\/p.php?p=CompanionAds&l=1&u=https%3A%2F%2Fdisplay-tm.everesttech.net%2Fiframe%3FassetId%3D12932333%26sessId%3De438d7a2ae9d4efc7d69259fbf6782038adfcc14.1%26psId%3DUNXVu9lfiD5WPKwedMp7%26bt%3Dt%26q%3DH4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA","originalUrl":"https:\/\/display-tm.everesttech.net\/iframe?assetId=12932333&sessId=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1&psId=UNXVu9lfiD5WPKwedMp7&bt=t&q=H4sIAAAAAAAAAG2SP0wTcRTHuVYUMEGDJcFOP9FEIN619-d3f2DAlkIL5QhpoS04kN_d_X7tj157x_VKWxMXHEyYTI2DxMkRJx1dFB1MdHBgMyYmxkUXDYMxulhEY4y-4Q0v732_ee_zepN31CtvhwadwU_9HxLhW8f7xvyWi7mi4xRtjFxa40ynEjGoZWGPi1lZ7G1iL4M36rjmD7zvHnrwOjAcMvxCc26jmp-yE345th53V6etkb32NSG0nslGm8rqilzKpWDaa1SIWVNvvtq9fyoeSlE_nrMLiaKfhrFWfNrI52mbaTO6c5XaNopALgpG5mm13pwAsarlOdQCkOM5fgJkdXZJVBQFxOvUtiLz-oqkFCZAY3MUxFzXxnlspKkfgaLCiTIYSaeW9PlLwKZlDJLYLDujIIe9GnWqEaljMlXynAqOKCIX7bSrIqdFQRYR5NFfCjsMkHkoW5ZmmIQnsqmYRICGbEoYEUkRVSg_YsawJKqWggSENUvCxFQsWROgRgwiK6oQFVVkEdPkJY5_ylyAKs8TzCMW8yphJYIFViMiYg0MVUsyBM2E5gumP5bITWeWZrOzC8m12cQ7hgl-ZC73PP5ycSC0vFDI1TWb0ATML6Yb2NJdJXxWdzqgqmDKqRjIB3AcxG3UWbjuA0a7C5trt08-nzxgunkJQukbExJgaa62TOeyM-o6bGHNaHq5rUCvX2FL5SLLo-3AoOcb7BF_1qI110YtntfagYF_6_cC5zvPwhVRBdsO8Tl0BI2LLeiLXPKwpMOUvhsIItd9GDjWoIQeBJJ9f9wG-v8WDP_ffPhMhxSbWYqzQpTXoqIQZUVlKzjXd8KrG9R0qqffvNzrDweXs4nhwzTa9TM-T44HacWNg5kO7umm37kTshc9auLM0Vie-qU0btUWe7aDXTvB32rnru_vP3vy9cb3Hwd8bMMtAwAA"},"trackingEvents":[],"clickthroughTracking":[]}],"vastVersion":"2.0","adTitleAndRelated":{"AdTitle":"Upper-Funnel_New Audience_Adobe - Open Exchange_Video_Couple_25-54_Mobile_Onsen_:15_DB 2019 TW Q1-Contextual-mWeb - 237391545","AdTitleTruncated10":"Upper-Funn..."},"allExtensionsData":[{"children":{"AdVerifications":[{"name":"AdVerifications","children":{"Verification":[{"name":"Verification","attributes":{"vendor":"Moat"},"children":{"ViewableImpression":[{"name":"ViewableImpression","value":"https:\/\/px.moatads.com\/pixel.gif?moatPartnerId=tubemogulinappvideo489886420875&moatPartnerKey=zMoatTBPc&moatNode=true","attributes":{"id":"zMoatTBSess=e438d7a2ae9d4efc7d69259fbf6782038adfcc14.1[MOAT]zMoatTBCmp=685403[MOAT]zMoatTBPlc=2050369[MOAT]zMoatTBFeed=44337[MOAT]zMoatTBAd=4117407632[MOAT]zMoatTBSite=654143"}}]}}]}}]}}]};

        // Vast data defaults on some keys
        if (typeof vastData['mediaFile'] === 'undefined') {
            vastData['mediaFile'] = {};
        }
        if (typeof vastData['trackingEvents'] === 'undefined') {
            vastData['trackingEvents'] = {};
        }
        if (typeof vastData['clickThrough'] === 'undefined') {
            vastData['clickThrough'] = {};
        }
        if (typeof vastData['clickTracking'] === 'undefined') {
            vastData['clickTracking'] = {};
        }

        // load ad parameters
        var adParameters = '';
        if (typeof vastData['adParameters'] !== 'undefined' &&
            vastData['adParameters'] !== null &&
            vastData['adParameters'] !== ''
        ) {
            adParameters = vastData['adParameters'];
        }

        // force mp4 is present flag
        var forceMp4IfPresent = true; // by default do not allow dual behavior, prefer mp4

                var glftSspBuddyPackIV = false;
                var enterScreenSrc = '{[enterScreenSrc]}';

        function cancelYes() {
            glftSspRouter.redirect(glftSspAdStatusObject.getExitString());
        };

        function cancelNo() {
            glftSspAdStatusObject.setPaused(false);

            if (
                typeof glftSspStartAdObject === 'object'
            ) {
                if (
                    typeof glftSspStartAdObject.getVPAIDPlayerObject() !== 'undefined' &&
                    glftSspStartAdObject.getVPAIDPlayerObject() !== ''
                ) {
                    glftSspStartAdObject.getVPAIDPlayerObject().resumeAd();
                }
            }

            if (glftSspAdStatusObject.getAdMode() === 'mp4') {
                document.getElementById('videoObject').play();
            }

            glftSspVideoStateHandlerObject.changePopupState('hide');
        };
    </script>
</head>
<body>


<div id="loader_cont"></div>
<div id="mainContainer">
    <iframe id="adLoaderIFrame" src="about:blank" scrolling="no"></iframe>
    <div id="videoPlayerContainer" style="visibility: hidden; position: relative; z-index: 1;">
        <div id="adDisplayContainer" style="pointer-events: none !important;"></div>
        <video id="videoObject" width="100%" height="100%" style="z-index: 1;"
               autobuffer autoplay webkit-playsinline playsinline x-webkit-airplay="deny" preload="auto">
            <source src="" type="video/mp4"/>
        </video>
    </div>

    <span id="advertismentLabel" class="advertismentLabel" style="display: none;">
        <span id="advertismentLabelLinkLayer" class="advertismentLabelLinkLayer"></span>
        <span class="advertismentLabelShiftLayer" id="advertismentLabelShiftLayer"><img src="{[info_button_image]}" id="advertismentLabelIcon" class="advertismentLabelIcon" /><span id="advertismentLabelText" class="advertismentLabelText">  {[i18n_advertisment]}</span></span>
    </span>

    <div id="head_close"
         style="position: absolute; top: 0; right: 0; visibility: hidden; width: 10em; height: 10em; border: 0; z-index: 2147483647;"
         tabindex="0" ontouchmove="e.preventDefault()" ontouchend="">
        <img id="close_image"
             style="position: absolute !important; right: 0; margin: 0.8em; display: inline-block; cursor: pointer; width: 100%; height: 100%;"
             src="{[closeImgUrl]}"/>
    </div>

    <div id="head_info_btn" class="info_button " tabindex="0" style="z-index: 2147483647 !important;" ontouchmove="e.preventDefault()">
        <span>{[i18n_moreinfo]}</span>
    </div>

    <div id="skip_head">skip advertisement <span id="skip_seconds"></span></div>

            <div id="vpaidPreventClickthroughLayer" onclick="event.stopPropagation();">&nbsp;</div>

    <div id="cancel_video_popup">
        <div class="info_cont">
            <div class="title"><span>cancel</span></div>
            <div class="body" id="cancel_video_popup_body"><span>{[i18n_cancel_message]}</span></div>
            <div class="actions">
                <div id="cancel_yes" onclick="cancelYes();" tabindex="0">
                    <span>end</span>
                </div>
                <div id="cancel_no" onclick="cancelNo();" tabindex="0">
                    <span>{[i18n_resume]}</span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div id="timeout_window">
        <div class="info_cont">
            <div class="title"><span>cancel</span></div>
            <div class="body"><span>video failed to load</span></div>
            <div class="actions">
                <div tabindex="0" id="pcEnd" class="pcEnd">
                    <span>end</span>
                </div>
                <div tabindex="0" id="pcRetry" class="pcRetry">
                    <span>retry</span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div id="counterContainer">
        <div id="counterNumber"></div>
        <canvas id="counterCanvas" width="60" height="60"></canvas>
    </div>

    <!-- WS Overlay -->
    <div id="wsOverlay"></div>

    <!-- IV Buddy Pack WS -->
    <div id="buddyPackWsContainer">
        <img id="buddyPackWsImage" src="{[enterScreenSrc]}" />
        <div id="buddyPackWsCloseContainer" tabindex="0" ontouchmove="e.preventDefault()" ontouchend="">
            <img id="buddyPackWsCloseImage" src="{[closeImgUrl]}"/> <!-- http://ingameads.gameloft.com/un/web/fullscreen/images/newIcons/close_button_tp_bg.png -->
        </div>
        <span id="wsAdvertismentLabel" class="wsAdvertismentLabel">
            <span id="wsAdvertismentLabelLinkLayer" class="advertismentLabelLinkLayer"></span>
            <span class="advertismentLabelShiftLayer"><img src="{[info_button_image]}" style="width: 0.8em; vertical-align: middle;" /><span class="advertismentLabelText">  {[i18n_advertisment]}</span></span>
        </span>
    </div>


</div>

<script type="text/javascript">
    // Interrupt Object used by interrupt partial
    var glftSspAdInterruptAdapter = function () {
        var _this = this;

        this.pause = function () {
            if (glftSspAdStatusObject.getEnded() === true) {
                return false;
            }

            glftSspAdStatusObject.setPopupCause('pause');

            if (
                typeof glftSspStartAdObject === 'object'
            ) {
                if (
                    typeof glftSspStartAdObject.getVPAIDPlayerObject() !== 'undefined' &&
                    glftSspStartAdObject.getVPAIDPlayerObject() !== ''
                ) {
                    glftSspStartAdObject.getVPAIDPlayerObject().pauseAd();
                }
            }

            if (glftSspAdStatusObject.getAdMode() === 'mp4') {
                document.getElementById('videoObject').pause();
            }

            glftSspAdStatusObject.setPaused(true);

            return true;
        };

        this.resume = function () {
            if (glftSspAdStatusObject.getEnded() === true || glftSspAdStatusObject.getPaused() == false) {
                return false; // don't resume an ad that ended or is not paused
            }

            // resume ad
            if (
                typeof glftSspStartAdObject === 'object'
            ) {
                if (
                    typeof glftSspStartAdObject.getVPAIDPlayerObject() !== 'undefined' &&
                    glftSspStartAdObject.getVPAIDPlayerObject() !== ''
                ) {
                    glftSspStartAdObject.getVPAIDPlayerObject().resumeAd();
                }
            }

            if (glftSspAdStatusObject.getAdMode() === 'mp4') {
                document.getElementById('videoObject').play();
            }

            // flag video status as resumed
            glftSspAdStatusObject.setPaused(false);

            return true;
        };

        this.close = function () {
            closeButton = document.getElementById('head_close');
            if (closeButton.style.visibility == 'visible') {
                glftSspRouter.redirect(glftSspAdStatusObject.getExitString());
            }
        };

        this.onBackPressed = function () {
            if (glftSspAdStatusObject.getEnded() == true) {
                _this.close();
            } else {
                _this.pause();
            }
        }
    };

    var glftSspAdInterruptAdapterObject = new glftSspAdInterruptAdapter();
</script>


<script text="text/javascript">
    /*if (typeof glftSspAdInterruptAdapter != 'function') {
        // dummy function
        var glftSspAdInterruptAdapter = function () {
            this.close = function () {
                return false;
            }

            this.pause = function () {
                return false;
            }

            this.resume = function () {
                alert('Interrupt resume!');

                return false;
            }

            this.onBackPressed = function () {
                return false;
            }
        }
    }*/

    var ControllerEvent = {
        "UNDEFINED": 0,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (0, 1)
        //////////////////////////////////////////////////////////////////////////
        "LeftTrigger": 1,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (0, 1)
        //////////////////////////////////////////////////////////////////////////
        "RightTrigger": 2,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (-1, 1)
        //////////////////////////////////////////////////////////////////////////
        "LeftStickX": 3,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (-1, 1)
        //////////////////////////////////////////////////////////////////////////
        "LeftStickY": 4,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (-1, 1)
        //////////////////////////////////////////////////////////////////////////
        "RightStickX": 5,
        //////////////////////////////////////////////////////////////////////////
        /// will take continuous values between (-1, 1)
        //////////////////////////////////////////////////////////////////////////
        "RightStickY": 6,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "DpadEventUp": 7,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "DpadEventDown": 8,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "DpadEventLeft": 9,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "DpadEventRight": 10,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "LeftBumper": 11,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "RightBumper": 12,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonY": 13,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonA": 14,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonX": 15,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonB": 16,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonStart": 17,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonSelect": 18,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "ButtonBack": 19,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "LeftStickButton": 20,
        //////////////////////////////////////////////////////////////////////////
        /// will take fixed values, 1 when pressed, 0 when released
        //////////////////////////////////////////////////////////////////////////
        "RightStickButton": 21
    };

    var onPause = function () {
        return glftSspAdInterruptAdapterObject.pause();
    }

    var onResume = function () {
        // do nothing at the moment
        //return glftSspAdInterruptAdapter.resume();
    }

    var onControllerClose = function () {
        glftSspAdInterruptAdapterObject.close();
    }

    var onControllerEvent = function (event, value) {
        if (event == ControllerEvent.ButtonB && value == 0.0) {
            onControllerClose();
        }
    }

    var onResumeActive = function () {
        onResume();
    }

    var onPauseActive = function () {
        onPause();
    }

    var onBackPressed = function () {
        glftSspAdInterruptAdapterObject.onBackPressed();
    }

    var isBackPressed = function () {
        glftSspAdInterruptAdapterObject.onBackPressed();
    }
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        document.body.addEventListener('touchmove', function (e) {
            e.preventDefault();
        });
    });

    var glftSspVideoCompanionAdsObject = '';

    var glftSspToolsObject = new glftSspTools();

    var glftSspVideoStateHandlerObject = new glftSspVideoStateHandler({
        videoDomObject: document.getElementById('videoObject'),
        timeoutPopupDomObject: document.getElementById('timeout_window'),
        cancelPopupDomObject: document.getElementById('cancel_video_popup')
    });

    var glftSspAdStatusObject = new glftSspAdStatus({
        vastData: vastData,
        redirectionCache: redirectionCache,
        glftSspTracker: glftSspTracker,
        glftSspRouter: glftSspRouter,
        gladsTrackingUrls: gladsTrackingUrls,
        gladsImpressionTrackingUrl: gladsImpressionTrackingUrl,
        gladsClickTrackingUrl: gladsClickTrackingUrl,
        partnerImpressionTrackingUrls: partnerImpressionTrackingUrls,
        gladsGlotTrackingVideoCompleteUrl: gladsGlotTrackingVideoCompleteUrl,
        sspClickUrl: sspClickUrl,
        gladsGlotTrackingImpressionUrl: gladsGlotTrackingImpressionUrl,
        videoStateHandlerObject: glftSspVideoStateHandlerObject
    });

    glftSspVideoStateHandlerObject.setOptions({
        adStatusObject: glftSspAdStatusObject
    });

    var videoDomObject = document.getElementById('videoObject');
    videoDomObject.playbackRate = 1;

    // close button object & click
    var closeButtonDomObject = document.getElementById('head_close');
    var closeFunction = function () {
        glftSspRouter.redirect(glftSspAdStatusObject.getExitString());
    };
    closeButtonDomObject.addEventListener(glftSspToolsObject.getClickEvent(), closeFunction);

    // info button setup - only consider displaying it if we have at least one click through link for it
    var displayingInfoButton = false;
    var infoButtonDomObject = document.getElementById('head_info_btn');
    if (typeof vastData['clickThrough'][0] !== 'undefined' &&
        vastData['clickThrough'][0] !== null &&
        vastData['clickThrough'][0] !== ''
    ) {
        displayingInfoButton = true;

        // add the event to redirect to above link
        infoButtonDomObject.addEventListener(glftSspToolsObject.getClickEvent(), function () {
            // do the "clickthrough" tracking
            glftSspAdStatusObject.trackClickthrough();

            // redirect to link
            glftSspRouter.redirect('link:' + vastData['clickThrough'][0]);
        });
        infoButtonDomObject.addEventListener('keypress', function (event) {
            if (event.keyCode === 13 || event.keyCode === 96) {
                this.blur();

                // do the "clickthrough" tracking
                glftSspAdStatusObject.trackClickthrough();

                // redirect to link
                glftSspRouter.redirect('link:' + vastData['clickThrough'][0]);
            }
        });
    }

    var clickparserObject = new glftSspClickParser({
        adStatusObject: glftSspAdStatusObject,
        glftSspRouter: glftSspRouter,
        _os: _os
    });

    // Loading close button object
    var glftSspCloseButtonHandlerObject = new glftSspCloseButtonHandler({
        closeButtonDomObject: closeButtonDomObject,
        adStatusObject: glftSspAdStatusObject
    });

    // Load info button
    var glftSspInfoButtonHandlerObject = new glftSspInfoButtonHandler({
        infoButtonDomObject: infoButtonDomObject,
        adStatusObject: glftSspAdStatusObject,
        toolsObject: glftSspToolsObject,
        displayingInfoButton: displayingInfoButton
    });

    // Loading IV reward handler object
    var glftSspRewardHandlerObject = new glftSspIVRewardHandler({
        closeButtonDomObject: closeButtonDomObject,
        infoButtonDomObject: infoButtonDomObject,
        videoStateHandlerObject: glftSspVideoStateHandlerObject,
        iHttpReturn: glftSspIHttpReturn,
        rewardUrl: gladsRewardSettings['rewardUrl'],
        rewardCurrency: gladsRewardSettings['rewardCurrency'],
        notifyReward: gladsRewardSettings['notifyReward'],
        adStatusObject: glftSspAdStatusObject,
        sspRouter: glftSspRouter,
        displayingInfoButton: displayingInfoButton,
        closeButtonHandlerObject: glftSspCloseButtonHandlerObject,
        infoButtonHandlerObject: glftSspInfoButtonHandlerObject
    });

    // Loading counter timer object
    var glftSspCornerTimerObject = new glftSspCircularTimer({
        counterContainerObject: document.getElementById('counterContainer'),
        canvasObject: document.getElementById('counterCanvas'),
        counterNumberObject: document.getElementById('counterNumber'),
        adStatusObject: glftSspAdStatusObject,
        progressBarColor: 'rgba(255, 150, 0, 1.0)'
    });

    var glftSspAdjusterObject = new glftSspAdjuster({
        adjustableElementObj: document.getElementById('buddyPackWsImage'),
        adjustableElementContainerObj: document.getElementById('buddyPackWsContainer'),
        adjustableElementHeight: document.getElementById('buddyPackWsImage').height,
        adjustableElementWidth: document.getElementById('buddyPackWsImage').width
    });

    // Load video object
    var glftSspVideoPlayerObject = new glftSspVPlayer({
        vastData: vastData,
        videoDomObject: videoDomObject,
        cornerTimerObject: glftSspCornerTimerObject,
        closeButtonDomObject: closeButtonDomObject,
        infoButtonDomObject: infoButtonDomObject,
        videoStateHandlerObject: glftSspVideoStateHandlerObject,
        rewardHandlerObject: glftSspRewardHandlerObject,
        adStatusObject: glftSspAdStatusObject,
        displayingInfoButton: displayingInfoButton,
        closeButtonHandlerObject: glftSspCloseButtonHandlerObject,
        infoButtonHandlerObject: glftSspInfoButtonHandlerObject
    });

    var glftSspStartAdObject = new glftSspStartAd({
        vastData: vastData,
        videoDomObject: videoDomObject,
        forceMp4IfPresent: forceMp4IfPresent,
        adStatusObject: glftSspAdStatusObject,
        sspRouter: glftSspRouter,
        cornerTimerObject: glftSspCornerTimerObject,
        videoPlayerObject: glftSspVideoPlayerObject,
        rewardHandlerObject: glftSspRewardHandlerObject,
        closeButtonDomObject: closeButtonDomObject,
        closeButtonHandlerObject: glftSspCloseButtonHandlerObject,
        infoButtonDomObject: infoButtonDomObject,
        infoButtonHandlerObject: glftSspInfoButtonHandlerObject,
        displayingInfoButton: displayingInfoButton,
        videoStateHandlerObject: glftSspVideoStateHandlerObject,
        adjusterObject: glftSspAdjusterObject,
        clickparserObject: clickparserObject,
        adParameters: adParameters
    });

    var glftSspWsHandlerObject = new glftSspWsHandler({
        startAdObject: glftSspStartAdObject,
        optinUrl: ''    });

    var cancelYesButton = document.getElementById('cancel_yes');
    cancelYesButton.addEventListener('keypress', function (event) {
        if (event.keyCode === 13 || event.keyCode === 96) {
            this.blur();
            cancelYes();
        }
    });

    var cancelNoButton = document.getElementById('cancel_no');
    cancelNoButton.addEventListener('keypress', function (event) {
        if (event.keyCode === 13 || event.keyCode === 96) {
            this.blur();
            cancelNo();
        }
    });

    var cancelYesButtonTimeout = document.getElementById('pcEnd');
    cancelYesButtonTimeout.addEventListener(glftSspToolsObject.getClickEvent(), cancelYes);
    cancelYesButtonTimeout.addEventListener('keypress', function (event) {
        if (event.keyCode === 13 || event.keyCode === 96) {
            this.blur();
            cancelYes();
        }
    });

    var cancelNoButtonTimeout = document.getElementById('pcRetry');
    cancelNoButtonTimeout.addEventListener(glftSspToolsObject.getClickEvent(), cancelNo);
    cancelNoButtonTimeout.addEventListener('keypress', function (event) {
        if (event.keyCode === 13 || event.keyCode === 96) {
            this.blur();
            cancelNo();
        }
    });

    closeButtonDomObject.addEventListener(glftSspToolsObject.getClickEvent(), closeFunction);
    closeButtonDomObject.addEventListener('keypress', function () {
        if (event.keyCode==13 || event.keyCode==96) {
            this.blur();
            closeFunction();
        }
    });

        glftSspVideoCompanionAdsObject = new glftSspVideoCompanionAds({
        videoDomObject: videoDomObject,
        tracker: glftSspTracker,
        router: glftSspRouter,
        toolsObject: glftSspToolsObject,
        adStatusObject: glftSspAdStatusObject,
        vastData: vastData,
                            });
    glftSspVideoCompanionAdsObject.init();

    window.addEventListener('load', function () {
        // show body container
        document.getElementById('mainContainer').style.display = 'block';

        // slide in video if not iv
        if (!glftSspRewardHandlerObject.isRewardable()) {
            document.getElementById('mainContainer').classList.add('mainContainerSlide');
        } else {
            document.getElementsByTagName("BODY")[0].classList.add('blackBackgroundBody');
        }

        if (wsType = glftSspWsHandlerObject.isWs()) {
            glftSspWsHandlerObject.startWs(wsType);
        } else {
            glftSspStartAdObject.startAd();
        }
    });

</script>
</body>
</html>
