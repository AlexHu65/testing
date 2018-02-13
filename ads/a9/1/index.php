<!DOCTYPE html>
<!--<html dir="{[text_direction]}">-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html, charset=UTF-8"/>


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
            background-color: transparent;
            -ms-content-zooming: none;
            -ms-touch-action: none;
            touch-action: none
        }

        .full_screen body,
        html.full_screen {
            height: 100%
        }

        body {
            background-color: rgba(0, 0, 0, 0.5);
            font-family: "Helvetica";
            margin: 0;
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -ms-user-select: none;
            user-select: none;
            color: white;
            overflow-x: hidden
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
            border-radius: 2.9em;
            -webkit-border-radius: 2.9em;
            border-bottom-left-radius: 1.6em;
            border-bottom-right-radius: 1.6em;
            -webkit-border-bottom-left-radius: 1.6em;
            -webkit-border-bottom-right-radius: 1.6em
        }

        .radius_bkgrd {
            border-radius: 2.3em;
            -webkit-border-radius: 2.3em;
            border-bottom-left-radius: 1.1em;
            border-bottom-right-radius: 1.1em;
            -webkit-border-bottom-left-radius: 1.1em;
            -webkit-border-bottom-right-radius: 1.1em
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
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3)
        }

        #head_text b {
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3), 0px 0px 5px rgba(255, 255, 255, 1);
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
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            display: none;
            z-index: 100;
            background-image: url('data:image/gif;base64,R0lGODlhNgA3APMAAP////////7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/gAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAANgA3AAAEzBDISau9OOvNu/9gKI5kaZ4lkhBEgqCnws6EApMITb93uOqsRC8EpA1Bxdnx8wMKl51ckXcsGFiGAkamsy0LA9pAe1EFqRbBYCAYXXUGk4DWJhZN4dlAlMSLRW80cSVzM3UgB3ksAwcnamwkB28GjVCWl5iZmpucnZ4cj4eWoRqFLKJHpgSoFIoEe5ausBeyl7UYqqw9uaVrukOkn8LDxMXGx8ibwY6+JLxydCO3JdMg1dJ/Is+E0SPLcs3Jnt/F28XXw+jC5uXh4u89EQAh+QQJCgAAACwAAAAANgA3AAAEzhDISau9OOvNu/9gKI5kaZ5oqhYGQRiFWhaD6w6xLLa2a+iiXg8YEtqIIF7vh/QcarbB4YJIuBKIpuTAM0wtCqNiJBgMBCaE0ZUFCXpoknWdCEFvpfURdCcM8noEIW82cSNzRnWDZoYjamttWhphQmOSHFVXkZecnZ6foKFujJdlZxqELo1AqQSrFH1/TbEZtLM9shetrzK7qKSSpryixMXGx8jJyifCKc1kcMzRIrYl1Xy4J9cfvibdIs/MwMue4cffxtvE6qLoxubk8ScRACH5BAkKAAAALAAAAAA2ADcAAATOEMhJq7046827/2AojmRpnmiqrqwwDAJbCkRNxLI42MSQ6zzfD0Sz4YYfFwyZKxhqhgJJeSQVdraBNFSsVUVPHsEAzJrEtnJNSELXRN2bKcwjw19f0QG7PjA7B2EGfn+FhoeIiYoSCAk1CQiLFQpoChlUQwhuBJEWcXkpjm4JF 3w9P5tvFqZsLKkEF58/omiksXiZm52SlGKWkhONj7vAxcbHyMkTmCjMcDygRNAjrCfVaqcm11zTJrIjzt64yojhxd/G28XqwOjG5uTxJhEAIfkECQoAAAAsAAAAADYANwAABM0QyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7/i8qmCoGQoacT8FZ4AXbFopfTwEBhhnQ4w2j0GRkgQYiEOLPI6ZUkgHZwd6EweLBqSlq6ytricICTUJCKwKkgojgiMIlwS1VEYlspcJIZAkvjXHlcnKIZokxJLG0KAlvZfAebeMuUi7FbGz2z/Rq8jozavn7Nev8CsRACH5BAkKAAAALAAAAAA2ADcAAATLEMhJq7046827/2AojmRpnmiqrqwwDAJbCkRNxLI42MSQ6zzfD0Sz4YYfFwzJNCmPzheUyJuKijVrZ2cTlrg1LwjcO5HFyeoJeyM9U++mfE6v2+/4PD6O5F/YWiqAGWdIhRiHP4kWg0ONGH4/kXqUlZaXmJlMBQY1BgVuUicFZ6AhjyOdPAQGQF0mqzauYbCxBFdqJao8rVeiGQgJNQkIFwdnB0MKsQrGqgbJPwi2BMV5wrYJetQ129x62LHaedO21nnLq82VwcPnIhEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7/g8Po7kX9haKoAZZ0iFGIc/iRaDQ40Yfj+RepSVlpeYAAgJNQkIlgo8NQqUCKI2nzNSIpynBAkzaiCuNl9BIbQ1tl0hraewbrIfpq6pbqsioaKkFwUGNQYFSJudxhUFZ9KUz6IGlbTfrpXcPN6UB2cHlg fcBuqZKBEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhhh8XDMk0KY/OF5TIm4qKNWtnZxOWuDUvCNw7kcXJ6gl7Iz1T76Z8Tq/b7yJEopZA4CsKPDUKfxIIgjZ+P3EWe4gECYtqFo82P2cXlTWXQReOiJE5bFqHj4qiUhmBgoSFho59rrKztLVMBQY1BgWzBWe8UUsiuYIGTpMglSaYIcpfnSHEPMYzyB8HZwdrqSMHxAbath2MsqO0zLLorua05OLvJxEAIfkECQoAAAAsAAAAADYANwAABMwQyEmrvTjrzbv/YCiOZGmeaKqurDAMAlsKRE3EsjjYxJDrPN8PRLPhfohELYHQuGBDgIJXU0Q5CKqtOXsdP0otITHjfTtiW2lnE37StXUwFNaSScXaGZvm4r0jU1RWV1hhTIWJiouMjVcFBjUGBY4WBWw1A5RDT3sTkVQGnGYYaUOYPaVip3MXoDyiP3k3GAeoAwdRnRoHoAa5lcHCw8TFxscduyjKIrOeRKRAbSe3I9Um1yHOJ9sjzCbfyInhwt3E2cPo5dHF5OLvJREAOwAAAAAAAAAAAA== '); background-position: center; background-repeat: no-repeat } #gl_logo:before { display: block; position: relative; top: 3%; font-size: 2.4em; color: #A7C4C6 } #cnt_connection_lost { font-size: 2em; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.7);
            color: white;
            z-index: 9999998
        }

        #cancel_video_popup {
            -webkit-transform: translateZ(0);
            position: absolute;
            left: 0;
            top: 0;
            color: #000;
            z-index: 9999
        }

        #cancel_video_popup .info_cont {
            width: 36em;
            background: rgba(255, 255, 255, 0.9);
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
            color: #60A5F2
        }

        #cancel_video_popup .actions div {
            padding: 1em;
            width: 15.9em
        }

        #cancel_video_popup .actions span {
            font-size: 2.5em
        }

        #cancel_yes {
            float: left;
            font-weight: bold;
            border-top: 1px solid #DCDCDC;
            border-right: 1px solid #DCDCDC
        }

        #cancel_no {
            float: left;
            font-weight: bold;
            border-top: 1px solid #DCDCDC
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
            text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0 0.2em;
            text-align: center
        }

        #wv_body .game_btn.install,
        #wv_body .game_btn.play_video {
            box-shadow: inset 0px 1px 1px #88BDDD, inset 0px -1px 1px #5398C7, inset 1px 0px 1px rgba(9, 119, 178, 0.6), inset -1px 0px 1px rgba(9, 119, 178, 0.6)
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
            box-shadow: inset 0px 1px 1px #94B5B3, inset 0px -1px 1px #969290, inset 1px 0px 1px rgba(166, 176, 178, 0.6), inset -1px 0px 1px rgba(166, 176, 178, 0.6)
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
            text-shadow: 0px 0px 1px #497A9D;
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
            text-shadow: 0px 0px 1px rgba(9, 78, 126, 0.5);
            font-weight: bold;
            word-break: break-word
        }

        #wv_body .game_name .message {
            font-size: 1.8em;
            color: #252525;
            text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.9)
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
            z-index: 999999;
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
            margin-top: 0px
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
            background-color: #E9E9E9;
            position: relative;
            background: black
        }

        #player_video_cont #video_tag {
            width: auto;
            height: 99%;
            margin: 0 auto;
            display: block;
            background-color: black
        }

        #player_video_cont #subtitle {
            style: display: none
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
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3), -4px 4px 4px rgba(0, 0, 0, 0.3), 0px -2px 4px rgba(0, 0, 0, 0.3)
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
            text-shadow: 0px 0px 1px #88A8BF;
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
            z-index: 9999999;
            outline: none
        }

        #skip_head {
            position: fixed;
            z-index: 9;
            top: -101%;
            right: 15px;
            padding: 5px 10px;
            font-size: 2.3em;
            background: rgba(0, 0, 0, .65);
            border-radius: 0.5em;

            -webkit-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            -moz-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
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

        body {
            /*background-color: #000000*/
        }

        body.rotatedView {
            -webkit-transform: rotate(90deg); /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(90deg); /* IE 9 */
            transform: rotate(90deg); /* Firefox 16+, IE 10+, Opera */
        }

        #videoObject {
            position: fixed !important;
            top: 0px;
            left: 0px
        }

        #loader_cont {
            display: block;
            width: 77px;
            height: 77px;
            -webkit-transform: translateZ(0)
        }

        #gl_logo {
            display: block;
            -webkit-transform: translateZ(0)
        }

        #cancel_video_popup {
            display: none;
            z-index: 10000001;
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
            z-index: 10000001;
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
            z-index: 10000002;
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
            z-index: 10000002;
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
            font-family: Tahoma;
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
            background-image: url(../images/play_overlay.png);
            background-position: center center;
            background-size: auto 30%;
            background-repeat: no-repeat;
            cursor: pointer;
            height: 100%
        }

        *

        /

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
            top: 0px;
            left: 0px;
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
            margin: 0 auto;
            margin-top: 10px;
            margin: bottom: 10px;
            display: block
        }

        #endScreenLowResolution {
            display: none
        }

        #videoPlayerOverlay {
            position: absolute;
            left: 0px;
            top: 0px;
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
            z-index: 10000001;
            height: 100%
        }

        #timeout_window .info_cont {
            width: 36em;
            background: rgba(255, 255, 255, 0.9);
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
            color: #60A5F2
        }

        #timeout_window .actions > div {
            font-weight: bold
        }

        #timeout_window .actions .pcEnd {
            padding: 1em;
            width: 15.9em;
            float: left;
            border-right: 1px solid #DCDCDC;
            border-top: 1px solid #DCDCDC
        }

        #timeout_window .actions .pcRetry {
            padding: 1em;
            width: 15.9em;
            float: left;
            border-top: 1px solid #DCDCDC
        }

        #timeout_window .actions span {
            font-size: 2.5em
        }
    </style>
    <style type="text/css">
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
            z-index: 99999;
            top: 15%;
            left: -101%;
            display: block;
            visibility: visible;
            outline: none;
            font-size: 2.3em;
            line-height: 2.4em;
            color: #fff;
            text-align: center;
            text-decoration: none;
            background: rgba(0, 0, 0, 0.4);
            padding: 0.2em 1em;
            margin: 0;
            border: 1px solid #fff;
            border-left: 1px solid transparent;
            border-radius: 0 5px 5px 0;
            white-space: nowrap;

            -webkit-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            -moz-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            transition: 0.3s all cubic-bezier(.55, 0, .1, 1);

            -webkit-transform: translateX(0%) translateY(0%) scale(1);
            -ms-transform: translateX(0%) translateY(0%) scale(1);
            transform: translateX(0%) translateY(0%) scale(1);
        }

        #head_info_btn.active {
            left: 0px;
        }

        #head_info_btn.centered {
            top: 50%;
            left: 50%;

            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
            border-left: 1px solid #fff;
            border-radius: 5px;

            border-radius: 10px;
            font-size: 30px;
            line-height: 50px;
            padding: 0px 18px;
        }

        #head_info_btn.animate {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
            -webkit-animation: clickToggle 2s infinite;
            -moz-animation: clickToggle 2s infinite;
            animation: clickToggle 2s infinite;

        }

        #head_info_btn.animate .hand_animation {
            position: absolute;
            bottom: -60px;
            right: -55px;
            width: 80px;
            height: 80px;

            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Qjk0OTAwMTQxMUYxMTFFNjhEMzQ5QTFGN0E2MEJCN0UiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Qjk0OTAwMTUxMUYxMTFFNjhEMzQ5QTFGN0E2MEJCN0UiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0 ieG1wLmlpZDpCOTQ5MDAxMjExRjExMUU2OEQzNDlBMUY3QTYwQkI3RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCOTQ5MDAxMzExRjExMUU2OEQzNDlBMUY3QTYwQkI3RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjGNJx4AAAx+SURBVHja7FwJTFXLGT4IiLiVuiuvbi8aQC1apWrUIGrjAlqtCyCu4FYEF3w+cXmmVuG1xMd7QkSJdYnR2DbmRY2KFFOK+1bUiBrjbqLGDXFfcTrfcU7fYZg5d+Gey7l5/MkEcu8/d2a+M/PPN///z1GUGqkRK0tjWhbTcoyWl7QQWkppKaBlBi3+NRDJ5a+NGzcmixcvJseOHSMvX74kkNLSUlJQUEBmzJhB/P39AWgq/Vjx1GKGfElLzvTp08nz58+Jkdy+fZsMHDgQvVhTA+BPkrN69Wpir7x//57ExMSgJ9/XAKgo38bHxxNH5e3bt6RTp07oTezPGcBfUiFlZWXEGTl06BDx8vJCj7zcDEAtWkbTsoOWy2yTu07LHloSsNG5C8CvqAjB+fTpEykqKiKbN28mt27dkoI4btw49GiRi4Dxo6UHLZG0RNDSWqCTVKtWLTJ69GiyY8cOcvnyZXWTu379OtmzZw9JSEjQNrpv3AHgIcwiEXhxcXFoqYiWzX5+fmTv3r1CAAFunTp1oNuoCsD1pGUL2unRoweJjIwkERERpHXr1vjyAi2JbNZ937NnT3Lx4kXDlXHv3j0SFRWFumvNBrAUT4+XI0eOoJUjOr3IFi1akGfPngk7vHTpUuhnOAGcD0Dp2LEj2bJlC3nx4kWl375w4QKZNm0a0WYdbK89gkkwc+ZMNJJtJoDCxrdv345WtnO6f1m0aJFQHwNv2bIl6vxW10lfWqJp2UbLWWajjmNW0BJOizd2 /+TkZLtAOXnyJHn9+rVDNvrjx49kwIAB6MxXZgH4kIqQ6/n6+qKl2jrdhlhiN27cEHYWthLLnXVwIepHR0eTbdu2kbNnz6o26vjx42Tt2rUkPDwcSqeTkpKI2YJ20W/03wwAC3DCEMncuXPRUhqnvxDLSCTl5eWq/cIMGzRokBRoTU6fPq3OkKoKbDDs8507d6Q6WDlYQWYA+EcqwkZhG3GsozohXJ3/UJHSmtmzZ6v2xx2yfv164u3tjT7u9fHxIZs2bRLqwXbDhlO937gaQH9s+Xfv3hU2nJ2drRphrk50t27d1BnnagHwubm56tJPTU0ljx8/luo+ffpUoyuhDJQwsAEZ5dqwYQOUNphxElk2efJkYaMfPnwgISEhaPH3XJ2/UXE5gGyp5bLNZ2Xnzp3JmzdvhLrnz5+H7nluc1gEXiozMV27doXSOFcD6IXTBGySSA4cOIBGD3B1uhvRGtGmdPjwYcNdFLOvXr16vLHPTEtLE+oD2CZNmkApSKevjgVtiaSwsBBKhWY4E+L79OkjtV3Dhg1Dw3N03EelNVhmtmTJkiUqh6P6h0F1iouLpTOELUl/HSBf1K9fn9y/f19YZ82aNZW8QlTGYzOTmRhsgtgMzQDx71SEjeK4xGiNrw7AX8DmGO22p06dguIpnLlZnelBQUGqaRAJjmFUZzkHyPKpU6dKvUL4PaoTxdXZAmIuEvRXozWuBjAcRyeZzZkzZw4aXaUBqPE9Ga2BbNy4EUobucFlYeaIBDMNMw4zT+84wAw+c+aMsM6+ffugtI8/GrZq1Up4stHTGjNmYebKlSuFjT558kSjNcFcZ6W05ty5c1A4x+kH4XdkOyxsHvrB1Uno16+f9EENHjwYSklcnYxly5bZpDWuBrAVZoCM1mRlZaHRLK6jhrRm7Nixqs3h6qzEjJZtDm3btoVSBFfnn1SEdeBcAA/E2Vqn3xgmBhuYEa0xYxYa0prg4GA0PIIbnJTWwOYwb02A/ pyMAcO2igRAATCujYh27dpJTQzO1HgwXJ1UcEp30xrV5shoTV5eHhrN4zpqSGsQpOK9NdjVhw4dKqU0WLJgB1ydzPT0dGEdmAQ4h7UNS09r4F1yO63p27evlNZg4ACAG5yU1sCYM5sTxtXJwwORnZUZ/aml0/9VgwYNpLRm1qxZUJrFtREHWiMbi5m05h9UpLSG2RxfXUcNaQ3OqVRnEze4EUa0ZsqUKZVCqEa0hvkllwr8f9VCa/q3adPGFq3hbc7CMWPGSG1O9+7dKwWhjGgNNgDmLPDmaQ1vYsAJWZCrk8jjHRgYWD20ZtWqVVKbw2hNENfZIsRS7A1C2aI1eIhUpw3XRjw+P3jwoOoSu3nzprYU1xh4vw1pTfPmzaHUwdUABoLWIMZgcJTiaU2MEa0ZNWoUlEbZQ2sQLWQ7eB0BIIjKHaTlIy03afnaRvjAkNZkZmaq/NOMWfgNbJGraA2cn/DfcfoqrcnPz6/gjoetQ9zaheFQKa3B8g4ICFDplqVpzf79+6GwXzC4kQBx5MiRqn1lDybbxfFkldYgtCCSlJQUKKWYQmvAyxylNQsWLKiki02GfjfGIEo3knl+gk0Kyk9C2FQkJSUlUCgxK3PLUVpTF08bgXuEJjGDJ06ciC9yqjmtQ52Fly5dEo6FMYXuZgDoDK2ph5AiC46f5k8W1QjiQirCcWRkZKinJrNmocO0xqLJRS3h3BVFBa9duwaFa2YB6DCtsXB21r+pCMfRpUsXKHUxC0RDWsM8xMM9AMBkeHAMnB+LzQLQkNbIaIoFAfyCipBZnDhxAkonzMylNqQ1Q4YMQQeSPSDB8r9UhOf2pk2bQrGpKejZ8hCDIvAeYosC+C0V4RhiY2NVx4eZAEbA9e6Ih9iCAPaF39MoIGYagLYC36A1jRo1siSt0YkPVoroyIlkJfr9HbMBdDjwbcEk872y7FvGKIJMA1DzECOJUZQkKQt8WwzABaIzOwQXi5TPt7NMsYHB8M GxTNbdI0aMEDJ7UeDbYgB2g/9SJEgOZRm2FZOJqohfFPIKg4ODhw0fPlwJDQ1V6DJWysrKFMrg0ZtKFSitUfLz8+GtyVYsIF5eXjyvLX/48KFCj6IV9KgdVOj5H3awjavazujQoYM6qxwR0Bo+wmaxizY/UjEMKbgCvB/g95MFZmxJWFhYpbCmhQCcjcxakTAX3MQKU9YJ8FJ69eo1d9euXepydUboqUX9o1hTjlARfkFPXOqfqvy4H+KmV69edTrzFFcULL6EvRE+FV15g7NY+XydzGmZhosuRncx0DBylhHxgvf56NGjatoE/kdAvVmzZujEFGLty4b5+qCWXqp6Lv4XFeEPIyGTpdmW0fKUltvM+3yU5Zzg/01WsX02AFxORThOdm0sylkAn2J2iVLKWNZAuNUdqHYCOAj3W0SyYsUKVFrh7CYSQKXSh8XFxUp5efk2+vtFiucLiGFYSYk4INe7d2/1j7M/XiYyrrgixjKupnv4DByPKB3cV7LbTrh0pHy+k+yUSI0rMu6RtKN8vhLm42EAdqUlF8c42bUIfe4M1X3mLIBxuDssEzwdHLqZAzXJA8DDTYN0bH64FWXPjSvJjS27ReVIItc3v6kwV34enytjIfCS8KARwxZtjCKKBpccS3AKqRIXxBnYnkaRKxMaGooGt8LwWgS43+G8i13W1m13ffovljebeS7xCaYj7UF0v1gUlNm6dauWbZ9lVp6LHcAF0vJd+/bticxZIErqZPGQQjMS0FfgMo4saZuXd+/eqVcj2EkE6RIt3JX/glQ2eMuRSWHPTXfo4I6M9mYmMzlTHM61SOiWufJFuXcgow0bNkTn/ixKmHQheLEaLZElU/KC2clecPEd7sq4g3iCjC935AlDHj16RObPn68Z5VRXUh8qobSsh90SvYlEtvH1798flX9kdtI9wtsYPD24v+29hI2ZgexTRn2SXUVLcIPdnj5gM4T/T6Nebj/3CAbRB7ED7L6OeKv hqWYH9Z20DDSblgDcnJwczQGSzhI6lWoHUDcgeCz2Ie0DLi17ZefOnQS3K5EpYI/PUKMleIucE7Qkx8zMqyoBqBvgBLi0EKmDT9AewXk7MTFRc7yON6IluDPnKC1h1yvGEZNef+dSAHUDTgQgkyZNUu9y2CM4l4K007qr4Q2vCi2Bbt26dbUNy4uY+P5AUwAkP71p7evatWur+TIPHjywOfhXr16RefPm/X82OkNLGIkHLQm00x9oTQB1ncZbkP6EWQROKEtK4mcjNhnZzScRLWGvelJpiYMOVWsDqOt8CyQlYZnK3prkqGAHxmuk7PUIeTSAukH8AUsTfNAeCiKjJevWratAS6rg0vcsAHWbQzoozO7dux0CD8ua0ZJ1tPzaBTERzwNQN6AhSFCaMGECEb3P0ICWxLgwqOS5AOoGloYQgegWu0ZL2GtRKtCSGgC5W+zwauMqxZUrV9R4BF4ICZ+ejJZ4HIBuknm0XGHBHOQg9lVqpEZqhMr/BBgAZTsfW/b9otsAAAAASUVORK5CYII= ') center center no-repeat; -webkit-animation:showToggle 2s infinite; -moz-animation:showToggle 2s infinite; animation: showToggle 2s infinite; -webkit-animation-fill-mode: forwards; } @-webkit-keyframes 'showToggle' { from { opacity: 0.0; } 99% { opacity: 1.0; } to {} /* equals `100% {}` Leave it empty to fix the flicker */ } @keyframes showToggle { from { opacity: 0.0; } 99% { opacity: 1.0; } to {} /* equals `100% {}` Leave it empty to fix the flicker */ } @-webkit-keyframes 'clickToggle' { 0% { -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1);
        }

        45
        %
        {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            -ms-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            transform: translateX(-50%) translateY(-50%) scale(1)
        ;
        }
        52
        %
        {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
            transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
        }
        62
        %
        {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
            transform: translateX(-50%) translateY(-50%) scale(0.9)
        ;
        }
        70
        %
        {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            -ms-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            transform: translateX(-50%) translateY(-50%) scale(1)
        ;
        }
        100
        %
        {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            -ms-transform: translateX(-50%) translateY(-50%) scale(1)
        ;
            transform: translateX(-50%) translateY(-50%) scale(1)
        ;
        }
        }

        @keyframes clickToggle {
            0% {
                -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
                -ms-transform: translateX(-50%) translateY(-50%) scale(1);
                transform: translateX(-50%) translateY(-50%) scale(1);
            }
            45% {
                -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
                -ms-transform: translateX(-50%) translateY(-50%) scale(1);
                transform: translateX(-50%) translateY(-50%) scale(1);
            }
            52% {
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
            -webkit-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            -moz-transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
            transition: 0.3s all cubic-bezier(.55, 0, .1, 1);
        }

        #head_info_btn.clicked {
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.9);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0.9);
            transform: translateX(-50%) translateY(-50%) scale(0.9);
        }

        #loader_cont {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 78px;
            height: 78px;
            margin: -39px 0 0 -39px;
        }

        #btns_video_summary {
            z-index: 99999999;
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
            top: 0.8em !important;
            right: 0 !important;
        }

        .advertismentLabel {
            bottom: 3px;
            right: 6px;
            font-family: arial;
            color: #FFFFFF;
            z-index: 100000000;
            font-size: 2.3em;
            display: block;
            text-shadow: 1px 1px 5px #000000, -1px -1px 5px #000000, 1px 1px 5px #000000, -1px -1px 5px #000000;
            position: absolute;
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
            z-index: 2147483605;
        }

        #buddyPackWsCloseImage {
            position: relative;
            width: 30px;
            z-index: 214748360;
        }

        .wsAdvertismentLabel {
            bottom: 3px;
            right: 8%;
            font-family: arial;
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
            background-color: #000000;
            opacity: 0.5;
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
            z-index: 2147483605;
        }

        #specialWsCloseImage {
            position: relative;
            width: 30px;
            z-index: 214748360;
        }

        .specialWsAdvertismentLabel {
            bottom: 3px;
            left: 1%;
            font-family: arial;
            color: #FFFFFF;
            z-index: 2147483605;
            font-size: 0.8em;
            display: block;
            text-shadow: 1px 1px 5px #000000, -1px -1px 5px #000000, 1px 1px 5px #000000, -1px -1px 5px #000000;
            position: absolute;
        }

        video {
            pointer-events: none !important;
        }


    </style>
    {[gl_tracking_js]}


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
                    'http://edt.fp.ps.netease.com'
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
            }
        }
    </script>

    <script type="text/javascript">
        var glftSspProcessor = {
            addDebugText: function () {
                var debugDiv = document.createElement('div');
                debugDiv.href = 'exit:';
                debugDiv.style.position = 'absolute';
                debugDiv.style.left = 0;
                debugDiv.style.top = 0;
                debugDiv.style.width = "50px";
                debugDiv.style.height = "50px";
                debugDiv.style.backgroundColor = "#FF0000";
                debugDiv.style.zIndex = 1000005;

                document.body.appendChild(debugDiv);
            }
        };

        function cancelYes() {
            glftSspRouter.redirect(videoStatus.exitString);
        }

        function cancelNo() {
            glftSspVideoStateHandlerObject.changePopupState('hide');

            videoStatus.paused = false;

            document.getElementById('videoObject').play();

            if (videoStatus.ended == true) {
                videoStatus.ended = false;
                glftPlayerUtils.counterControl();
            }
        }

        function manipulateClass(element, classString, typeOfAction) {
            if (typeof typeOfAction == 'undefined') {
                typeOfAction = 'add';
            }
            if (typeOfAction == 'add') {
                if (document.getElementById(element).className.indexOf(classString) == -1) {
                    document.getElementById(element).className += ' ' + classString;
                }
            } else if (typeOfAction == 'remove') {
                if (document.getElementById(element).className.indexOf(classString) != -1) {
                    document.getElementById(element).className = document.getElementById(element).className.replace(' ' + classString, '');
                }
            }
        }

        var Base64 = {
            _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

            encode: function (input) {
                var output = "";
                var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
                var i = 0;

                input = Base64._utf8_encode(input);

                while (i < input.length) {

                    chr1 = input.charCodeAt(i++);
                    chr2 = input.charCodeAt(i++);
                    chr3 = input.charCodeAt(i++);

                    enc1 = chr1 >> 2;
                    enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                    enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                    enc4 = chr3 & 63;

                    if (isNaN(chr2)) {
                        enc3 = enc4 = 64;
                    } else if (isNaN(chr3)) {
                        enc4 = 64;
                    }

                    output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

                }

                return output;
            },


            decode: function (input) {
                var output = "";
                var chr1, chr2, chr3;
                var enc1, enc2, enc3, enc4;
                var i = 0;

                input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

                while (i < input.length) {

                    enc1 = this._keyStr.indexOf(input.charAt(i++));
                    enc2 = this._keyStr.indexOf(input.charAt(i++));
                    enc3 = this._keyStr.indexOf(input.charAt(i++));
                    enc4 = this._keyStr.indexOf(input.charAt(i++));

                    chr1 = (enc1 << 2) | (enc2 >> 4);
                    chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                    chr3 = ((enc3 & 3) << 6) | enc4;

                    output = output + String.fromCharCode(chr1);

                    if (enc3 != 64) {
                        output = output + String.fromCharCode(chr2);
                    }
                    if (enc4 != 64) {
                        output = output + String.fromCharCode(chr3);
                    }

                }

                output = Base64._utf8_decode(output);

                return output;

            },

            _utf8_encode: function (string) {
                string = string.replace(/\r\n/g, "\n");
                var utftext = "";

                for (var n = 0; n < string.length; n++) {

                    var c = string.charCodeAt(n);

                    if (c < 128) {
                        utftext += String.fromCharCode(c);
                    }
                    else if ((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                    else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }

                }

                return utftext;
            },

            _utf8_decode: function (utftext) {
                var string = "";
                var i = 0;
                var c = c1 = c2 = 0;

                while (i < utftext.length) {

                    c = utftext.charCodeAt(i);

                    if (c < 128) {
                        string += String.fromCharCode(c);
                        i++;
                    }
                    else if ((c > 191) && (c < 224)) {
                        c2 = utftext.charCodeAt(i + 1);
                        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                        i += 2;
                    }
                    else {
                        c2 = utftext.charCodeAt(i + 1);
                        c3 = utftext.charCodeAt(i + 2);
                        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                        i += 3;
                    }

                }

                return string;
            }
        };

        var videoStatus = {
            mediaFileUrl: "",
            vastMediaFileDuration: '00:00:01', // minimum of 1 second in vast media file duration
            loaded: false,

            popupCause: 'pause', // pause, timeout, etc

            paused: false,
            ended: false,
            storedPercent: -1,
            duration: 0,
            progress: 0,
            rewardAttempt: false,
            rewardDelivered: 0,
            rewarded: false,
            exitString: 'exit:',
            tracking_start_tracked: false,
            tracking_first_quartile_tracked: false,
            tracking_midpoint_tracked: false,
            tracking_third_quartile_tracked: false,
            tracking_complete_tracked: false,
            tracking_mute_tracked: false,
            tracking_unmute_tracked: false,
            tracking_pause_tracked: false,
            tracking_resume_tracked: false,
            tracking_fullscreen_tracked: false,

            trackClickthroughDone: false,

            trackVideoComplete: function () {
                if (videoStatus.tracking_complete_tracked == false) {
                    videoStatus.tracking_complete_tracked = true;

                    // GLOT video complete tracking
                    if (gladsGlotTrackingVideoCompleteUrl.indexOf('videocomplete:') > -1) {
                        glftSspRouter.redirect(gladsGlotTrackingVideoCompleteUrl);
                    }

                    if (typeof vastData['trackingEvents']['complete'] != 'undefined' &&
                        vastData['trackingEvents']['complete'] != null &&
                        vastData['trackingEvents']['complete'] != ''
                    ) {
                        //console.log('Vast data: Tracking video complete.');
                        for (var key in vastData['trackingEvents']['complete']) {
                            glftSspTracker.track(vastData['trackingEvents']['complete'][key]);
                        }
                    }

                    // track redirection cache
                    if (typeof redirectionCache['trackingEvents']['complete'] != 'undefined' &&
                        redirectionCache['trackingEvents']['complete'] != null &&
                        redirectionCache['trackingEvents']['complete'] != ''
                    ) {
                        for (var key in redirectionCache['trackingEvents']['complete']) {
                            glftSspTracker.track(redirectionCache['trackingEvents']['complete'][key]);
                        }
                    }

                    if (typeof gladsTrackingUrls['completeTrackingURL'] != 'undefined' &&
                        gladsTrackingUrls['completeTrackingURL'] != ''
                    ) {
                        glftSspTracker.track(gladsTrackingUrls['completeTrackingURL']);
                    }
                    videoStatus.tracking_complete_tracked = true;
                }
            },

            trackClickthrough: function (options) {
                // if tracking was already done, don't do it again
                if (this.trackClickthroughDone == true) {
                    return true;
                }

                // flag event as having been tracked
                this.trackClickthroughDone = true;

                // SSP Click URL
                var sspClickUrl = 'http://ssp-beta.gameloft.com/tracking/click?hash=ceba0bee-2d2b-4bbc-8cd2-6a04b98e8fb4';

                // Send Click tracking
                glftSspTracker.track(sspClickUrl);

                // internal tracking
                glftSspTracker.track(gladsClickTrackingUrl);

                //Click through Tracking
                if (typeof vastData['clickTracking'] != 'undefined' &&
                    vastData['clickTracking'] != null &&
                    vastData['clickTracking'] != '' &&
                    (
                        typeof options == 'undefined' ||
                        typeof options['skipBaseClickthrough'] == 'undefined'
                    )
                ) {
                    //console.log('Vast data: Clickthrough tracking.');
                    for (var key in vastData['clickTracking']) {
                        glftSspTracker.track(vastData['clickTracking'][key]);
                    }
                }

                // track redirection cache
                if (typeof redirectionCache['clickTracking'] != 'undefined' &&
                    redirectionCache['clickTracking'] != null &&
                    redirectionCache['clickTracking'] != ''
                ) {
                    for (var key in redirectionCache['clickTracking']) {
                        glftSspTracker.track(redirectionCache['clickTracking'][key]);
                    }
                }

                // track redirection cache
                if (typeof redirectionCache['clickThrough'] != 'undefined' &&
                    redirectionCache['clickThrough'] != null &&
                    redirectionCache['clickThrough'] != ''
                ) {
                    for (var key in redirectionCache['clickThrough']) {
                        glftSspTracker.track(redirectionCache['clickThrough'][key]);
                    }
                }
            }
        };

        //Read XML string
        var xmlDoc;

        var glftPlayerUtils = {
            showClose: function () {
                // hide skippable
                document.getElementById('skip_head').style.visibility = 'hidden';

                setTimeout(function () {
                    // show exit button
                    document.getElementById('head_close').style.visibility = 'visible';
                }, 600);
            },

            showInfo: function (ended) {
                // only proceed if there's a link under the learn more button
                if (displayingInfoButton == false) {
                    return false;
                }

                // show info button
                manipulateClass('head_info_btn', 'active', 'add');

                // animate/move info button to the middle
                if (ended == true) {
                    setTimeout(function () {
                        manipulateClass('head_info_btn', 'active', 'remove');
                        manipulateClass('head_info_btn', 'centered', 'add');
                        setTimeout(function () {
                            manipulateClass('head_info_btn', 'animate', 'add');
                            document.getElementById('head_info_btn').insertAdjacentHTML('beforeEnd', '<span class="hand_animation"><\/span>');
                        }, 200);
                    }, 200);
                }
            },

            isRewardable: function () {
                if (videoStatus.rewardDelivered == 1 ||
                    gladsRewardSettings['rewardUrl'].indexOf('[rewardUrl]') > -1 ||
                    gladsRewardSettings['rewardCurrency'].indexOf('[rewardCurrency]') > -1 ||
                    gladsRewardSettings['rewardUrl'] == '' ||
                    gladsRewardSettings['rewardCurrency'] == ''
                ) {
                    return false;
                }

                return true;
            },
            counterUpdate: function (receivedValue) {
                if (videoStatus.storedPercent == receivedValue) {
                    return false;
                }
                videoStatus.storedPercent = receivedValue;

                vPlayer = document.getElementById('videoObject');

                receivedValue = parseInt(receivedValue);

                if (receivedValue > 100) {
                    return false;
                }

                if (receivedValue % 5 != 0) {
                    while (receivedValue % 5 != 0) {
                        receivedValue -= 1;
                    }
                }

                if (receivedValue == 0) {
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

                var canvas = document.getElementById('counterCanvas');

                canvas.setAttribute('width', iconsDimension + 16);
                canvas.setAttribute('height', iconsDimension + 16);
                canvas.width = canvas.width;

                var arcObject = canvas.getContext('2d');
                arcObject.beginPath();

                arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 0, 2 * Math.PI);

                arcObject.strokeStyle = "rgba(255, 255, 255, 0.4)";
                arcObject.lineWidth = lnWidth;
                arcObject.stroke();

                var arcObject = canvas.getContext('2d');
                arcObject.beginPath();

                if (radiusValues[receivedValue] == 2) {
                    arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 0, radiusValues[receivedValue] * Math.PI);
                } else {
                    arcObject.arc(iconsDimension / 2 + 10, iconsDimension / 2 + 10, iconsDimension / 2 + 2, 1.5 * Math.PI, radiusValues[receivedValue] * Math.PI);
                }

                arcObject.strokeStyle = "rgba(0,255,0,1.0)";
                arcObject.lineWidth = lnWidth;
                arcObject.stroke();

                document.getElementById("counterNumber").setAttribute('style', 'top: 10px; left: 10px; font-size: ' + (iconsDimension / 2 + 2) + 'px; line-height: ' + (iconsDimension - (border * 2)) + 'px; width: ' + (iconsDimension - (border * 2)) + 'px; height: ' + (iconsDimension - (border * 2)) + 'px; border-width: ' + border + 'px;');

                return true;
            },

            counterControl: function () {
                if (videoStatus.ended == true) {
                    return false;
                }

                var video_player = document.getElementById('videoObject');
                document.getElementById('counterContainer').style.display = 'block';

                var current_time = video_player.currentTime;
                var totalDuration = videoStatus.duration;

                remainingSeconds = totalDuration - current_time;
                remainingSecondsText = Math.ceil(totalDuration - current_time);

                if (remainingSecondsText < 0) {
                    remainingSecondsText = 0;
                }
                document.getElementById('counterNumber').innerHTML = remainingSecondsText;

                percent = Math.ceil(100 - (remainingSeconds) * 100 / totalDuration);
                if (percent < 0) {

                    percent = 0;
                }
                if (percent >= 99) {
                    percent = 100;
                }

                this.counterUpdate(percent);

                _this = this;
                setTimeout(
                    function () {
                        _this.counterControl();
                    },
                    10
                );
            },

            rewardHandler: function () {
                // prepare caller
                glftSspIHttpReturn.async = false;
                glftSspIHttpReturn.dataType = 'json';
                glftSspIHttpReturn.crossDomain = true;

                // call the reward url
                glftSspIHttpReturn.call(gladsRewardSettings['rewardUrl'], this.rewardNotification);
            },

            rewardNotification: function (iHttpObj) {
                if (gladsRewardSettings['notifyReward'] == 1) {
                    var tcall = iHttpObj.request;
                    iHttpObj.request.onreadystatechange = function () {
                        // hide cancel if present
                        glftSspVideoStateHandlerObject.changePopupState('hide');

                        // display loading in case this takes longer than necessary
                        //document.getElementById('loader_cont').style.display = 'block';

                        if (tcall.readyState == 4) {
                            if (tcall.status == 200 && videoStatus.rewardDelivered != 1) {
                                var myArr = JSON.parse(tcall.responseText);
                                if (myArr.status == "success") {
                                    videoStatus.rewardDelivered = 1;

                                    // building the reward exit string
                                    exitString = 'exit:checkreward:' + gladsRewardSettings['rewardCurrency'];
                                } else {
                                    exitString = 'exit:';
                                }
                            } else {
                                exitString = 'exit:';
                            }
                            // exiting ad
                            //glftSspRouter.redirect(exitString);
                            // change what the close button does
                            videoStatus.exitString = exitString;

                            glftPlayerUtils.showClose();

                            glftPlayerUtils.showInfo(true);
                        }
                        else {
                            glftPlayerUtils.showClose();
                            glftPlayerUtils.showInfo(true);
                        }
                    }
                }
            },

            videoCompletedProcessing: function () {
                // if video ended was already called on current play, don't proceed
                if (videoStatus.ended == true) {
                    return false;
                }

                // complete tracking
                videoStatus.trackVideoComplete();

                // hide all possible splashes
                glftSspVideoStateHandlerObject.changePopupState('hide');

                videoStatus.ended = true;
                videoStatus.storedPercent = -1;
                glftPlayerUtils.counterUpdate(100);
                document.getElementById('counterNumber').innerHTML = '0';

                // hide counter container
                document.getElementById('counterContainer').style.display = 'none';

                // move advertisment text
                document.getElementById('advertismentLabel').style.right = '';
                document.getElementById('advertismentLabel').style.left = '6px';

                if (!glftPlayerUtils.isRewardable()) {
                    //glftSspRouter.redirect('exit:');
                } else {
                    glftPlayerUtils.rewardHandler();
                }

                glftPlayerUtils.showClose();

                glftPlayerUtils.showInfo(true);

            },

            durationHandlerTimePassedSinceLoaded: 0,
            durationHandlerStep: 10,
            durationHandler: function () {
                this.durationHandlerTimePassedSinceLoaded = this.durationHandlerTimePassedSinceLoaded + this.durationHandlerStep;

                _this = this;
                setTimeout(
                    function () {
                        _this.durationHandler();
                    },
                    _this.durationHandlerStep
                );
            },
            closeButtonHandlerStartHandled: false,
            closeButtonHandlerShowDelay: 5000,
            closeButtonHandlerShowDelayExtra: 10000,
            closeButtonHandlerStep: 10,
            closeButtonHandlerTimePassed: 0,
            closeButtonHandler: function () {
                // show skip
                document.getElementById('skip_head').className = 'active';

                // start timer
                this.closeButtonTimer();
            },
            closeButtonTimer: function () {
                if (videoStatus.paused != true) {

                    var timePassed = this.getTimePassed();
                    var showDelay = this.getShowDelay();

                    // calculate the remaining time
                    var skippableIn = Math.ceil((showDelay - timePassed) / 1000);

                    // debug
                    var debugSkippableIn = skippableIn;

                    if (videoStatus.loaded == true) {
                        var videoTimeLeft = this.getVideoTimeLeft();

                        // correct the skip time according to limit
                        if (!isNaN(videoTimeLeft) && skippableIn > videoTimeLeft) {
                            skippableIn = videoTimeLeft;
                        }

                        // debug
                        // console.log(
                        //     'timePassed: ' + timePassed,
                        //     'showDelay: ' + showDelay,
                        //     'skippableIn: ' + skippableIn,
                        //     'debugSkippableIn: ' + debugSkippableIn,
                        //     'videoStatus.duration: ' + videoStatus.duration,
                        //     'videoStatus.progress: ' + videoStatus.progress,
                        //     'videoTimeLeft: ' + videoTimeLeft
                        // );

                        // show the skip time
                        document.getElementById('skip_seconds').innerHTML = skippableIn;
                    }

                    // show skip button if maximum timer passed
                    if (timePassed >= showDelay) {
                        document.getElementById('skip_head').style.visibility = 'hidden';

                        glftPlayerUtils.showClose();
                        // end loop
                        return;
                    }
                }

                // continue loop
                _this = this;
                setTimeout(
                    function () {
                        _this.closeButtonTimer();
                    },
                    this.closeButtonHandlerStep
                );
            },
            getTimePassed: function () {
                // calculate passed time each step
                this.closeButtonHandlerTimePassed = this.closeButtonHandlerTimePassed + this.closeButtonHandlerStep;

                // get the correct time according to video
                if (
                    videoStatus.loaded == true && !isNaN(videoStatus.progress) &&
                    videoStatus.progress >= 0
                ) {
                    // get the time from video progress
                    return videoStatus.progress * 1000;
                } else {
                    // get the count down
                    return this.closeButtonHandlerTimePassed;
                }
            },
            getShowDelay: function () {
                // check video status, if loaded, set current delay to
                if (videoStatus.loaded == true && this.closeButtonHandlerStartHandled == false) {
                    this.closeButtonHandlerShowDelay = this.closeButtonHandlerShowDelayExtra;
                    this.closeButtonHandlerTimePassed = 0;

                    this.closeButtonHandlerStartHandled = true;
                }

                return this.closeButtonHandlerShowDelay;
            },
            getVideoTimeLeft: function () {
                if (videoStatus.loaded == true && videoStatus.duration > 0) {
                    return Math.ceil(videoStatus.duration - videoStatus.progress);
                } else {
                    return Number.NaN;
                }
            },
            infoButtonHandlerInitialCall: true,
            infoButtonHandlerDone: false,
            infoButtonHandlerStartHandled: false,
            infoButtonHandlerShowDelay: 5000,
            infoButtonHandlerShowDelayExtra: 10000,
            infoButtonHandlerStep: 10,
            infoButtonHandlerTimePassed: 0,
            infoButtonHandler: function () {
                if (this.infoButtonHandlerInitialCall == true) {
                    this.infoButtonHandlerInitialCall = false;
                    //console.log('Info button: Handler started.');
                } else {
                    if (videoStatus.paused != true) {
                        // increment passed time
                        this.infoButtonHandlerTimePassed = this.infoButtonHandlerTimePassed + this.infoButtonHandlerStep;

                        // check video status, if loaded, set current delay to
                        if (videoStatus.loaded == true && this.infoButtonHandlerStartHandled == false) {
                            this.infoButtonHandlerShowDelay = this.infoButtonHandlerShowDelayExtra;
                            this.infoButtonHandlerTimePassed = 0;

                            this.infoButtonHandlerStartHandled = true;

                            //console.log('Info button: Video loaded. Set delay extra as the show delay.');
                        }

                        // show button if maximum timer passed
                        if (this.infoButtonHandlerTimePassed >= this.infoButtonHandlerShowDelay) {
                            glftPlayerUtils.showInfo();

                            document.getElementById('head_info_btn').style.visibility = 'visible';
                            this.infoButtonHandlerDone = true;

                            //console.log('Info button: Showing info button.');
                            //console.log('Info button: this.infoButtonHandlerShowDelay = ' + this.infoButtonHandlerShowDelay);
                        }
                    }
                }

                if (this.infoButtonHandlerTimePassed % 1000 == 0) {
                    //console.log('Info button: ' + this.infoButtonHandlerTimePassed + ' ms passed.');
                }

                if (this.infoButtonHandlerDone == false) {
                    _this = this;
                    setTimeout(
                        function () {
                            _this.infoButtonHandler();
                        },
                        _this.infoButtonHandlerStep
                    );
                }
            }
        }

        function html5vast(video_player_id, options) {
            var video_player = document.getElementById(video_player_id);

            //Default options
            var html5vast_options = {
                'media_type': 'video/mp4',
                'media_bitrate_min': 50,
                'media_bitrate_max': 160,
                'additionalQuartileTracking': '',
                'tracker': glftSspTracker,
                'router': glftSspRouter
            };
            for (var key in options) {
                html5vast_options[key] = options[key];
            }

            h5vPrepare(html5vast_options);
            h5vPreRoll(video_player_id, html5vast_options);
        }

        //Parse VAST XML
        function h5vPrepare(options) {
            // Media file
            if (typeof vastData['mediaFile']['url'] != 'undefined' && vastData['mediaFile']['url'] != null && vastData['mediaFile']['url'] != '') {
                //console.log('Vast data: Extracting url and duration.');
                videoStatus.mediaFileUrl = vastData['mediaFile']['url'];
                if (typeof vastData['mediaFile']['duration'] != 'undefined' &&
                    vastData['mediaFile']['duration'] != null &&
                    vastData['mediaFile']['duration'] != '' &&
                    vastData['mediaFile']['duration'] != 'N/A' &&
                    vastData['mediaFile']['duration'] != '00:00:00' &&
                    vastData['mediaFile']['duration'] != '00:16:39'
                ) {
                    videoStatus.vastMediaFileDuration = vastData['mediaFile']['duration'];
                }
            }

            // set video duration
            var arrD = videoStatus.vastMediaFileDuration.split(':');
            var strSecs = (+arrD[0]) * 60 * 60 + (+arrD[1]) * 60 + (+arrD[2]);
            if (isNaN(strSecs) || !isFinite(strSecs) || strSecs <= 0) {
                strSecs = 1;
            }
            videoStatus.duration = strSecs;
        }

        //Preroll
        function h5vPreRoll(video_player_id, options) {
            var video_player = document.getElementById(video_player_id);

            if (typeof videoStatus.mediaFileUrl == 'undefined' || videoStatus.mediaFileUrl == '' || videoStatus.mediaFileUrl == null) {
                options['router'].redirect('exit:');
            }

            var video_player_paused = function () {
                videoStatus.paused = true;

                if (videoStatus.tracking_pause_tracked == false) {
                    // Allow pause to trigger as many times as necessary
                    //videoStatus.tracking_pause_tracked = true;

                    if (typeof vastData['trackingEvents']['pause'] != 'undefined' &&
                        vastData['trackingEvents']['pause'] != null &&
                        vastData['trackingEvents']['pause'] != ''
                    ) {
                        //console.log('Vast data: Tracking pause.');
                        for (var key in vastData['trackingEvents']['pause']) {
                            options['tracker'].track(vastData['trackingEvents']['pause'][key]);
                        }
                    }

                    // track redirection cache
                    if (typeof options['redirectionCache']['trackingEvents']['pause'] != 'undefined' &&
                        options['redirectionCache']['trackingEvents']['pause'] != null &&
                        options['redirectionCache']['trackingEvents']['pause'] != ''
                    ) {
                        for (var key in options['redirectionCache']['trackingEvents']['pause']) {
                            options['tracker'].track(options['redirectionCache']['trackingEvents']['pause'][key]);
                        }
                    }

                    if (typeof options['additionalQuartileTracking']['pauseTrackingURL'] != 'undefined' &&
                        options['additionalQuartileTracking']['pauseTrackingURL'] != ''
                    ) {
                        options['tracker'].track(options['additionalQuartileTracking']['pauseTrackingURL']);
                    }
                }

                if (videoStatus.ended != true) {
                    glftSspVideoStateHandlerObject.changePopupState('show');
                }
            };

            var video_player_resumed = function () {
                window.popupPauseInterval = setInterval(function () {
                    if (glftSspVideoStateHandlerObject.popupDisplayed() || videoStatus.paused == true) {
                        // pause video
                        document.getElementById('videoObject').pause();

                        // flag video status as paused
                        videoStatus.paused = true;
                    }
                }, 100);

                if (glftSspVideoStateHandlerObject.popupDisplayed() || videoStatus.paused == true) {
                    return false;
                }

                videoStatus.paused = false;

                if (videoStatus.tracking_resume_tracked == false) {
                    // Allow resume track to happen as many times as necessary
                    //videoStatus.tracking_resume_tracked = true;

                    if (typeof vastData['trackingEvents']['resume'] != 'undefined' &&
                        vastData['trackingEvents']['resume'] != null &&
                        vastData['trackingEvents']['resume'] != ''
                    ) {
                        //console.log('Vast data: Tracking resume.');
                        for (var key in vastData['trackingEvents']['resume']) {
                            options['tracker'].track(vastData['trackingEvents']['resume'][key]);
                        }
                    }
                }

                // track redirection cache
                if (typeof options['redirectionCache']['trackingEvents']['resume'] != 'undefined' &&
                    options['redirectionCache']['trackingEvents']['resume'] != null &&
                    options['redirectionCache']['trackingEvents']['resume'] != ''
                ) {
                    for (var key in options['redirectionCache']['trackingEvents']['resume']) {
                        options['tracker'].track(options['redirectionCache']['trackingEvents']['resume'][key]);
                    }
                }

                glftSspVideoStateHandlerObject.changePopupState('hide');
            };

            var video_player_play = function (event) {
                //glftSspVideo.adjustVideoPosition(video_player);

                video_player.src = glftSspToolsObject.getUrlWithTimestamp(videoStatus.mediaFileUrl);
                video_player.load();

                /*/ Debug START
                 video_player.addEventListener('error', function(event) {
                 console.log(event);
                 });
                 // Debug END */

                //On content load
                var video_player_loaded = function (event) {
                    // hide loader
                    document.getElementById('loader_cont').style.display = 'none';

                    // video data loaded flag
                    videoStatus.loaded = true;
                    glftPlayerUtils.durationHandler();

                    // set video duration from video header info
                    if (!isNaN(video_player.duration) && isFinite(video_player.duration)) {
                        videoStatus.duration = Math.floor(video_player.duration);
                    }

                    // Track partner impressions (from the vast file)
                    if (typeof vastData['impressions'] != 'undefined' &&
                        vastData['impressions'] != null &&
                        vastData['impressions'] != ''
                    ) {
                        //console.log('Vast data: Tracking impressions.');
                        for (var key in vastData['impressions']) {
                            options['tracker'].track(vastData['impressions'][key]);
                        }
                    }

                    // Tracking GLADS Impression
                    options['tracker'].track(gladsImpressionTrackingUrl);

                    // SSP Beacon URL
                    var sspBeaconUrl = 'http://ssp-beta.gameloft.com/tracking/beacon?hash=0e92ae66-1c42-448a-b1a4-4cc2734c6610';

                    // Send Beacon tracking
                    options['tracker'].track(sspBeaconUrl);

                    // Can we pause music?
                    var can_pause_music = '{[can_pause_music]}';

                    // Check if we can pause music
                    if (can_pause_music == '1') {
                        if (_os == "win" || _os == "winp" || _os == "WINDOWS") {
                            window.external.notify('pauseusermusic:');
                        } else {
                            document.location = 'pauseusermusic:';
                        }
                    }

                    // Tracking Partner Impressions (in addition to the vast impressions)
                    if (partnerImpressionTrackingUrls && typeof(partnerImpressionTrackingUrls) == 'object') {
                        for (var key in partnerImpressionTrackingUrls) {
                            options['tracker'].track(partnerImpressionTrackingUrls[key]);
                        }
                    }

                    // Tracking Redirection cache impressions
                    if (typeof options['redirectionCache']['impressions'] != 'undefined' &&
                        options['redirectionCache']['impressions'] != null &&
                        options['redirectionCache']['impressions'] != ''
                    ) {
                        for (var key in options['redirectionCache']['impressions']) {
                            options['tracker'].track(options['redirectionCache']['impressions'][key]);
                        }
                    }

                    h5vAddClickthrough(video_player_id, options);

                    video_player.removeAttribute("controls"); //Remove Controls

                    video_player.play();

                    // normal speed
                    video_player.playbackRate = 1;

                    video_player.removeEventListener('loadedmetadata', video_player_loaded);
                };

                //On PreRoll End
                var video_player_ended = function (event) {
                    glftPlayerUtils.videoCompletedProcessing();
                };

                video_player.addEventListener('loadedmetadata', video_player_loaded);
                video_player.addEventListener('ended', video_player_ended);
                video_player.removeEventListener('play', video_player_play);

                video_player.addEventListener('play', video_player_resumed);

                glftPlayerUtils.counterControl();
            };

            //Ping Tracking URIs
            var video_player_timeupdate = function (event) {
                var img_track = new Image();
                var current_time = Math.floor(video_player.currentTime);

                // update progress
                videoStatus.progress = current_time;

                //console.log('Video activity detected: ' + current_time);
                glftSspVideoStateHandlerObject.setPlayedTime(video_player.currentTime);

                if ((current_time >= 0)) { //Start
                    if (videoStatus.tracking_start_tracked == false) {
                        videoStatus.tracking_start_tracked = true;

                        // GLOT impression tracking
                        if (gladsGlotTrackingImpressionUrl.indexOf('track:') > -1) {
                            options['router'].redirect(gladsGlotTrackingImpressionUrl);
                        }


                        if (typeof vastData['trackingEvents']['start'] != 'undefined' &&
                            vastData['trackingEvents']['start'] != null &&
                            vastData['trackingEvents']['start'] != ''
                        ) {
                            //console.log('Vast data: Tracking video start.');
                            for (var key in vastData['trackingEvents']['start']) {
                                options['tracker'].track(vastData['trackingEvents']['start'][key]);
                            }
                        }

                        // track redirection cache
                        if (typeof options['redirectionCache']['trackingEvents']['start'] != 'undefined' &&
                            options['redirectionCache']['trackingEvents']['start'] != null &&
                            options['redirectionCache']['trackingEvents']['start'] != ''
                        ) {
                            for (var key in options['redirectionCache']['trackingEvents']['start']) {
                                options['tracker'].track(options['redirectionCache']['trackingEvents']['start'][key]);
                            }
                        }

                        if (typeof options['additionalQuartileTracking']['startTrackingURL'] != 'undefined' &&
                            options['additionalQuartileTracking']['startTrackingURL'] != ''
                        ) {
                            options['tracker'].track(options['additionalQuartileTracking']['startTrackingURL']);
                        }
                    }
                }
                if ((current_time == (Math.floor(videoStatus.duration / 4)))) { //First Quartile
                    if (videoStatus.tracking_first_quartile_tracked == false) {
                        videoStatus.tracking_first_quartile_tracked = true;

                        if (typeof vastData['trackingEvents']['firstQuartile'] != 'undefined' &&
                            vastData['trackingEvents']['firstQuartile'] != null &&
                            vastData['trackingEvents']['firstQuartile'] != ''
                        ) {
                            //console.log('Vast data: Tracking video firstQuartile.');
                            for (var key in vastData['trackingEvents']['firstQuartile']) {
                                options['tracker'].track(vastData['trackingEvents']['firstQuartile'][key]);
                            }
                        }

                        // track redirection cache
                        if (typeof options['redirectionCache']['trackingEvents']['firstQuartile'] != 'undefined' &&
                            options['redirectionCache']['trackingEvents']['firstQuartile'] != null &&
                            options['redirectionCache']['trackingEvents']['firstQuartile'] != ''
                        ) {
                            for (var key in options['redirectionCache']['trackingEvents']['firstQuartile']) {
                                options['tracker'].track(options['redirectionCache']['trackingEvents']['firstQuartile'][key]);
                            }
                        }

                        if (typeof options['additionalQuartileTracking']['firstQuartileTrackingURL'] != 'undefined' &&
                            options['additionalQuartileTracking']['firstQuartileTrackingURL'] != ''
                        ) {
                            options['tracker'].track(options['additionalQuartileTracking']['firstQuartileTrackingURL']);
                        }
                    }
                }
                if ((current_time == (Math.floor(videoStatus.duration / 2)))) { //Mid Point
                    if (videoStatus.tracking_midpoint_tracked == false) {
                        videoStatus.tracking_midpoint_tracked = true;

                        if (typeof vastData['trackingEvents']['midpoint'] != 'undefined' &&
                            vastData['trackingEvents']['midpoint'] != null &&
                            vastData['trackingEvents']['midpoint'] != ''
                        ) {
                            //console.log('Vast data: Tracking midpoint.');
                            for (var key in vastData['trackingEvents']['midpoint']) {
                                options['tracker'].track(vastData['trackingEvents']['midpoint'][key]);
                            }
                        }

                        // track redirection cache
                        if (typeof options['redirectionCache']['trackingEvents']['midpoint'] != 'undefined' &&
                            options['redirectionCache']['trackingEvents']['midpoint'] != null &&
                            options['redirectionCache']['trackingEvents']['midpoint'] != ''
                        ) {
                            for (var key in options['redirectionCache']['trackingEvents']['midpoint']) {
                                options['tracker'].track(options['redirectionCache']['trackingEvents']['midpoint'][key]);
                            }
                        }

                        if (typeof options['additionalQuartileTracking']['midpointTrackingURL'] != 'undefined' &&
                            options['additionalQuartileTracking']['midpointTrackingURL'] != ''
                        ) {
                            options['tracker'].track(options['additionalQuartileTracking']['midpointTrackingURL']);
                        }
                    }
                }
                if ((current_time == ((Math.floor(videoStatus.duration / 2)) + (Math.floor(videoStatus.duration / 4))))) { //Third Quartile
                    if (videoStatus.tracking_third_quartile_tracked == false) {
                        videoStatus.tracking_third_quartile_tracked = true;

                        if (typeof vastData['trackingEvents']['thirdQuartile'] != 'undefined' &&
                            vastData['trackingEvents']['thirdQuartile'] != null &&
                            vastData['trackingEvents']['thirdQuartile'] != ''
                        ) {
                            //console.log('Vast data: Tracking thirdQuartile.');
                            for (var key in vastData['trackingEvents']['thirdQuartile']) {
                                options['tracker'].track(vastData['trackingEvents']['thirdQuartile'][key]);
                            }
                        }

                        // track redirection cache
                        if (typeof options['redirectionCache']['trackingEvents']['thirdQuartile'] != 'undefined' &&
                            options['redirectionCache']['trackingEvents']['thirdQuartile'] != null &&
                            options['redirectionCache']['trackingEvents']['thirdQuartile'] != ''
                        ) {
                            for (var key in options['redirectionCache']['trackingEvents']['thirdQuartile']) {
                                options['tracker'].track(options['redirectionCache']['trackingEvents']['thirdQuartile'][key]);
                            }
                        }

                        if (typeof options['additionalQuartileTracking']['thirdQuartileTrackingURL'] != 'undefined' &&
                            options['additionalQuartileTracking']['thirdQuartileTrackingURL'] != ''
                        ) {
                            options['tracker'].track(options['additionalQuartileTracking']['thirdQuartileTrackingURL']);
                        }
                    }
                }

                if ((current_time >= (videoStatus.duration - 1))) { //End
                    videoStatus.trackVideoComplete();
                }

                if ((current_time >= (videoStatus.duration - 0.5))) { //End
                    glftPlayerUtils.videoCompletedProcessing();

                    video_player.removeEventListener('timeupdate', video_player_timeupdate);
                }
            };

            video_player.addEventListener('pause', video_player_paused);
            video_player.addEventListener('play', video_player_play);
            video_player.addEventListener('timeupdate', video_player_timeupdate);
        }

        //Add Clickthrough
        function h5vAddClickthrough(video_player_id, options) {
            var clickThroughAction = function () {
                videoStatus.trackClickthrough();

                if (typeof vastData['clickThrough'][0] != 'undefined' &&
                    vastData['clickThrough'][0] != null &&
                    vastData['clickThrough'][0] != ''
                ) {
                    options['router'].redirect('link:' + vastData['clickThrough'][0]);
                }
            };

            // attaching click to clickthrough button
            options['clickthroughButton'].addEventListener(glftSspToolsObject.getClickEvent(), function () {
                clickThroughAction();
            });
            options['clickthroughButton'].addEventListener('keypress', function (event) {
                if (event.keyCode == 13 || event.keyCode == 96) {
                    this.blur();
                    clickThroughAction();
                }
            });

            /*options['clickthroughOverlay'].addEventListener(glftSspToolsObject.getClickEvent(), function () {
             clickThroughAction();
             });*/
        }

        //Remove Clickthrough
        function h5vRemoveClickthrough(video_player_id) {
            var elem = document.getElementById('h5vclickt_' + video_player_id);
            elem.parentNode.removeChild(elem);
        }

        //Get current video source src
        function h5vGetCurrentSrc(video_player_id) {
            return document.getElementById(video_player_id).getElementsByTagName("source")[0].getAttribute("src");
        }

        //Add pixel for firing impressions, tracking etc
        function h5vAddPixel(pixel_url, options) {
            options['tracker'].track(pixel_url);
        }
    </script>
    <script type="text/javascript">
        // == Internally received params (ssp) ==
        var _os = 'ios';

        // == External received params (glads) ==

        // Prefixes and IDs
        var locationId = typeof glLocationId != 'undefined' ? glLocationId : '{[location_id]}';
        var statsURL = typeof glStatsUrl != 'undefined' ? glStatsUrl : '{[statsUrl]}';

        // Glads impression tracking url
        var gladsImpressionTrackingUrl = statsURL + '{[impTrackUrl]}';

        // GLOT tracking
        var gladsGlotTrackingImpressionUrl = '{[gladsGlotTrackingImpressionUrl]}';
        gladsGlotTrackingImpressionUrl = gladsGlotTrackingImpressionUrl.replace('%%location_id%%', locationId);
        var gladsGlotTrackingVideoCompleteUrl = '{[gladsGlotTrackingVideoCompleteUrl]}';

        // Partner's impression tracking url
        var partnerImpressionTrackingUrls = [];

        // Redirection cache
        var redirectionCache = {};

        if (typeof redirectionCache['trackingEvents'] == 'undefined') {
            redirectionCache['trackingEvents'] = {};
        }

        // Vast data
        var vastData = {
            "mediaFile": {
                "url": "https:\/\/cdn-a.amazon-adsystem.com\/video\/1a3b7161-07ad-49ae-831f-b7effd64434d\/300-640x360.mp4",
                "type": "video\/mp4",
                "bitrate": "307",
                "minBitrate": 0,
                "maxBitrate": 0,
                "duration": "00:00:15",
                "creative_id": "2696280810001"
            },
            "impressions": ["http:\/\/aax-us-east-test.amazon-adsystem.com\/e\/mdtb\/impv?b=IkwvgCHn0US5jrfrQIPW69EAAAFdHpXjpgEAAA_SBB_iMpw&ps=mVIp2&amznslots%5B0%5D=mVIp2", "https:\/\/s.amazon-adsystem.com\/iui3?d=forester-did&ex-fargs=%3Fi%3DvUF0gMRT2Rb8V42d8aYzjQ%26e%3DvideoImpression%26a%3D7996263160401%26c%3D2696280810001%26s%3Dpda&ex-fch=416719&cb=9,074,217,674,910,883,679"],
            "trackingEvents": {
                "start": ["https:\/\/s.amazon-adsystem.com\/iui3?d=forester-did&ex-fargs=%3Fi%3DvUF0gMRT2Rb8V42d8aYzjQ%26e%3DvideoStart%26a%3D7996263160401%26c%3D2696280810001%26s%3Dpda&ex-fch=416719&cb=3,990,522,745,934,646,333", "http:\/\/aax-us-east-test.amazon-adsystem.com\/x\/px\/Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA-gAellNZw\/%7B%22c%22%3A%22video%2
                    2 % 2C % 22src % 22 % 3A4050 % 2C % 22start % 22 % 3A1 % 7D"],"firstQuartile":["https
        :\/\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoFirstQuartile % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 1, 306, 564, 571, 826, 159, 614
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 221
        q % 22 % 3
        A1 % 2
        C % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 7
        D
        "],"
        midpoint
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoMidpoint % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 6, 302, 392, 837, 325, 448, 773
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 2
        C % 222
        q % 22 % 3
        A1 % 7
        D
        "],"
        thirdQuartile
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoThirdQuartile % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D26962808
        10001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 4, 334, 619, 826, 897, 574, 604
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 2
        C % 223
        q % 22 % 3
        A1 % 7
        D
        "],"
        complete
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoComplete % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 8, 754, 060, 233, 214, 623, 038
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 2
        C % 22
        cpl % 22 % 3
        A1 % 7
        D
        "],"
        mute
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoMute % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 5, 986, 546, 785, 314, 426, 241
        "],"
        unmute
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoUnmute % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpd
        a & ex - fch = 416719 & cb = 3, 814, 831, 970, 549, 878, 577
        "],"
        pause
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoPause % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 8, 813, 825, 225, 946, 750, 276
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        p % 22 % 3
        A1 % 2
        C % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 7
        D
        "],"
        resume
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoResume % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 5, 933, 570, 424, 792, 042, 372
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        r % 22 % 3
        A1 % 2
        C % 22
        c % 22 % 3
        A % 22
        video % 22 % 2
        C % 22
        src % 22 % 3
        A4050 % 7
        D
        "],"
        rewind
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoSkipBackward % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 4167
        19 & cb = 7, 663, 000, 148, 406, 581, 263
        "],"
        acceptInvitation
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoCreativeView % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 373, 273, 569, 886, 143, 877
        "],"
        close
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoClose % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 3, 256, 388, 585, 664, 149, 253
        "]},"
        clickThrough
        ":["
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        c
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXjeQEAAA_SAullNZw
        \/
        https:\
        /\/
        www.generalmills.com
        \/
        en
        \/
        Brands
        \/
        Cereals
        \/
        fiber - one
        "],"
        clickTracking
        ":["
        https:\
        /\/
        s.amazon - adsystem.com
        \/
        iui3 ? d = forester - did & ex - fargs =
        %
        3
        Fi % 3
        DvUF0gMRT2Rb8V42d8aYzjQ % 26e % 3
        DvideoClick % 26
        a % 3
        D7996263160401 % 26
        c % 3
        D2696280810001 % 26
        s % 3
        Dpda & ex - fch = 416719 & cb = 6, 599, 742, 092, 417, 817, 760
        ","
        http:\
        /\/
        aax - us - east - test.amazon - adsystem.com
        \/
        x
        \/
        px
        \/
        Qr1BdIDEU9kW_FeNnfGmM40AAAFdHpXj0gEAAA - gAellNZw
        \/%
        7
        B % 22
        c % 2
        2 % 3
        A % 22
        video % 22 % 2
        C % 22
        clk % 22 % 3
        A1 % 2
        C % 22
        src % 22 % 3
        A4050 % 7
        D
        "]};

        // Vast data defaults on some keys
        if (typeof vastData['mediaFile'] == 'undefined') {
            vastData['mediaFile'] = {};
        }
        if (typeof vastData['trackingEvents'] == 'undefined') {
            vastData['trackingEvents'] = {};
        }

        if (typeof vastData['clickThrough'] == 'undefined') {
            vastData['clickThrough'] = {};
        }

        var displayingInfoButton = false;
        if (typeof vastData['clickThrough'][0] != 'undefined' &&
            vastData['clickThrough'][0] != null &&
            vastData['clickThrough'][0] != ''
        ) {
            displayingInfoButton = true;
        }

        if (typeof vastData['clickTracking'] == 'undefined') {
            vastData['clickTracking'] = {};
        }

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

        var glftSspRouter = {
            redirect: function (destination) {
                if (_os == 'win' || _os == 'winp' || _os == 'WINDOWS') {
                    window.external.notify(destination);
                }
                else {
                    window.location = destination;
                }
            }
        };

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
            }, async: true, call: function (a) {
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
                    if (typeof callback != 'undefined' && callback != null) {
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

                    if (glftSspIHttp.request.readyState == 4) {
                        // do something?
                    }
                } catch (e) {
                }
            }
        };
    </script>


    <script type="text/javascript">
        var glftSspAdjuster = function (options) {
            var _this = this;

            var settings = {
                adjustableElementObj: '',
                adjustableElementContainerObj: '',
                viewportPercentile: 0.9,
                adjustableElementHeight: 0,
                adjustableElementWidth: 0,
                adjustableElementResizedHeight: 0,
                adjustableElementResizedWidth: 0,
                adjustableAreas: '',
                adjustableAreasOriginalSizes: []
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

            this.alignElement = function () {
                viewportDimensions = _this.getViewportDimensions();

                var currentViewportHeight = viewportDimensions['height'];
                var currentViewportWidth = viewportDimensions['width'];

                // Aligning to center
                elementTop = Math.round((currentViewportHeight - Math.round(parseInt(settings.adjustableElementHeight))) / 2);
                elementLeft = Math.round((currentViewportWidth - Math.round(parseInt(settings.adjustableElementWidth))) / 2);

                settings.adjustableElementObj.style.top = elementTop + 'px';
                settings.adjustableElementObj.style.left = elementLeft + 'px';

                // align container
                if (typeof settings.adjustableElementContainerObj == 'object') {
                    settings.adjustableElementContainerObj.style.top = elementTop + 'px';
                    settings.adjustableElementContainerObj.style.left = elementLeft + 'px';
                }

                setTimeout(
                    function () {
                        _this.alignElement();
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

            this.adjustElement = function () {
                if (getSizeCalled == false) {
                    if (settings.refreshElementSize) {
                        this.getElementSizes();
                    }
                }

                viewportDimensions = this.getViewportDimensions();

                var currentViewportHeight = viewportDimensions['height'];
                var currentViewportWidth = viewportDimensions['width'];

                window.scrollTo(0, 0);

                imageRatio = settings.adjustableElementWidth / settings.adjustableElementHeight;
                currentViewRatio = currentViewportWidth / currentViewportHeight;

                if (currentViewRatio > imageRatio) {
                    settings.adjustableElementResizedWidth = settings.adjustableElementWidth * currentViewportHeight / settings.adjustableElementHeight;
                    settings.adjustableElementResizedHeight = currentViewportHeight;
                } else {
                    settings.adjustableElementResizedWidth = currentViewportWidth;
                    settings.adjustableElementResizedHeight = settings.adjustableElementHeight * currentViewportWidth / settings.adjustableElementWidth;
                }

                settings.adjustableElementResizedHeight = Math.floor(settings.viewportPercentile * Math.floor(settings.adjustableElementResizedHeight));
                settings.adjustableElementResizedWidth = Math.floor(settings.viewportPercentile * Math.floor(settings.adjustableElementResizedWidth));

                // Dynamically setting image dimensions
                settings.adjustableElementObj.style.width = settings.adjustableElementResizedWidth + 'px';
                settings.adjustableElementObj.style.height = settings.adjustableElementResizedHeight + 'px';

                if (typeof settings.adjustableElementContainerObj == 'object') {
                    settings.adjustableElementContainerObj.style.width = settings.adjustableElementResizedWidth + 'px';
                    settings.adjustableElementContainerObj.style.height = settings.adjustableElementResizedHeight + 'px';
                }

                // Aligning to center
                elementTop = Math.round((currentViewportHeight - Math.round(parseInt(settings.adjustableElementObj.style.height))) / 2);
                elementLeft = Math.round((currentViewportWidth - Math.round(parseInt(settings.adjustableElementObj.style.width))) / 2);

                // align container
                if (typeof settings.adjustableElementContainerObj == 'object') {
                    settings.adjustableElementContainerObj.style.top = elementTop + 'px';
                    settings.adjustableElementContainerObj.style.left = elementLeft + 'px';
                } else {
                    settings.adjustableElementObj.style.top = elementTop + 'px';
                    settings.adjustableElementObj.style.left = elementLeft + 'px';
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
                        _this.adjustElement();
                    },
                    50
                );
            }
        }
    </script>
</head>
<body>
<div id="videoPlayerContainer" style="visibility: hidden;">
    <video id="videoObject" width="100%" height="100%" autobuffer webkit-playsinline playsinline x-webkit-airplay="deny"
           preload="auto">
        <source src="" type="video/mp4"/>
    </video>
</div>

<div id="loader_cont"
     style="position: absolute;top: 50%;left: 50%;margin-left:-38px; margin-top:-38px;width:77px;height:77px"></div>

<div id="head_close"
     style="position: absolute; top:0.8em; right:0.8em; visibility:hidden; width:10em; height:10em; border: 0; z-index:9999999999999;"
     tabindex="0" ontouchmove="e.preventDefault()" ontouchend="">
    <img id="close_image"
         style="position: absolute !important; right: 0.8em; display: inline-block;cursor:pointer;position:static;width:100%;height:100%;"
         src="{[closeImgUrl]}"/>
</div>

<div id="cancel_video_popup" style="display: none;">
    <div class="info_cont radius5">
        <div class="title"><span>{[i18n_cancel]}</span></div>
        <div class="body" id="cancel_video_popup_body"><span>{[i18n_cancel_message]}</span></div>
        <div class="actions">
            <div id="cancel_yes" tabindex="0">
                <span>{[i18n_end]}</span>
            </div>
            <div id="cancel_no" tabindex="0">
                <span>{[i18n_resume]}</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div id="timeout_window">
    <div class="info_cont radius5">
        <div class="title"><span>{[i18n_cancel]}</span></div>
        <div class="body"><span>{[i18n_videos_cancel_timeout]}</span></div>
        <div class="actions">
            <div tabindex="0" id="pcEnd" class="pcEnd">
                <span>{[i18n_end]}</span>
            </div>
            <div tabindex="0" id="pcRetry" class="pcRetry">
                <span>{[i18n_retry]}</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<div id="counterContainer">
    <div id="counterNumber"></div>
    <canvas id="counterCanvas" width="60" height="60"></canvas>
</div>

<span id="advertismentLabel" class="advertismentLabel" style="display: none;">
        {[i18n_advertisment]}</span>


<div id="head_info_btn" class="info_button" tabindex="0"
     ontouchmove="e.preventDefault()">
    <span>{[i18n_moreinfo]}</span>
</div>

<div id="skip_head">{[i18n_skipad]} <span id="skip_seconds"></span></div>

<!-- WS Overlay -->
<div id="wsOverlay"></div>

<!-- IV Buddy Pack WS -->
<div id="buddyPackWsContainer">
    <img id="buddyPackWsImage" src="{[enterScreenSrc]}"/>
    <div id="buddyPackWsCloseContainer" tabindex="0" ontouchmove="e.preventDefault()" ontouchend="">
        <img id="buddyPackWsCloseImage" src="{[closeImgUrl]}"/>
        <!-- http://ingameads.gameloft.com/un/web/fullscreen/images/newIcons/close_button_tp_bg.png -->
    </div>
    <span id="wsAdvertismentLabel" class="wsAdvertismentLabel">
        {[i18n_advertisment]}
    </span>
</div>


<script text="text/javascript">
    var glftSspWsHandler = function (options) {
        var _this = this;

        var settings = {
            startAd: '',
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
            } else if (glftSspBuddyPackIV == true && enterScreenSrc.indexOf('[enterScreenSrc]') == -1 && enterScreenSrc != '') {
                return 'buddypack';
            }

            return false;
        }

        this.startWs = function (wsType) {
            if (typeof wsType == 'undefined' || wsType == null || wsType == '') {
                startAd();
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
                    startAd();
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

                                settings.startAd();
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

                                settings.startAd();
                            } else {
                                closeFunction();
                            }

                            return false;
                        });
                    }


                    settings.adjustableAreas[i].addEventListener('keypress', function (event) {
                        if (event.keyCode == 13 || event.keyCode == 96) {
                            this.blur()

                            glftSspTracker.track(settings.optinUrl + '&' + event.target.alt);

                            if (event.target.alt == 'in') {
                                // hide special ws
                                document.getElementById('specialWsContainer').style.display = 'none';

                                // displayloader
                                document.getElementById('loader_cont').style.display = 'block';

                                // hide overlay
                                document.getElementById('wsOverlay').style.display = 'none';

                                settings.startAd();
                            } else {
                                closeFunction();
                            }
                        }
                        ;
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

                settings.startAd();
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
    // Interrupt Object used by interrupt partial
    var glftSspAdInterruptAdapter = function () {
        var _this = this;

        this.pause = function () {
            if (videoStatus.ended == true) {
                return false; // don't pause a video that ended
            }

            videoStatus.popupCause = 'pause';

            // pause video
            document.getElementById('videoObject').pause();

            // flag video status as paused
            videoStatus.paused = true;

            return true;
        };

        this.resume = function () {
            if (videoStatus.ended == true || videoStatus.paused == false) {
                return false; // don't play a video that ended
            }

            // pause video
            document.getElementById('videoObject').play();

            // flag video status as resumed
            videoStatus.paused = false;

            return true;
        };

        this.close = function () {
            closeButton = document.getElementById('head_close');
            if (closeButton.style.visibility == 'visible') {
                glftSspRouter.redirect(videoStatus.exitString);
            }
        };

        this.onBackPressed = function () {
            if (videoStatus.ended == true) {
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
    var glftSspVideoStateHandler = function (options) {
        var _this = this;

        var settings = {
            videoDomObject: '',
            vpaidObject: '',
            timeoutPopupObject: {},
            cancelPopupObject: {},

            videoStatus: {},

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

        this.startStateMonitoring = function (state) {
            // timeout monitoring
            _this.timeoutMonitorInterval = setInterval(function () {
                if (settings.timeoutMonitorIntervalCounter >= 10) {
                    if (settings.videoPlayedInCurrentInterval < 3) {
                        settings.videoStatus.popupCause = 'timeout';

                        // trying to pause ad if vpaid
                        if (typeof vpaidObject == 'object') {
                            vpaidObject.pauseAd();
                        } else {
                            // pausing video
                            settings.videoDomObject.pause();

                            // display retry just in case
                            if (settings.videoStatus.ended != true) {
                                _this.changePopupState('show');
                            }
                        }

                        clearInterval(_this.timeoutMonitorInterval);

                        //settings.videoPlayedInCurrentInterval = 0;
                    }

                    if (settings.videoStatus.ended == true) {
                        clearInterval(_this.timeoutMonitorInterval);
                    }
                    settings.videoPlayedInCurrentInterval = 0;
                    settings.timeoutMonitorIntervalCounter = 0;
                }

                settings.timeoutMonitorIntervalCounter += 1;
            }, 1000);
        };

        this.popupDisplayed = function () {
            if (settings.cancelPopupObject.style.display == 'block' ||
                settings.timeoutPopupObject.style.display == 'block'
            ) {
                return true;
            }

            return false;
        };

        this.changePopupState = function (action) {
            if (action == 'hide') {
                if (settings.timeoutPopupObject.style.display == 'block') {
                    this.startStateMonitoring('timeout');
                }

                settings.cancelPopupObject.style.display = 'none';
                settings.timeoutPopupObject.style.display = 'none';

                return true;
            }

            if (action == 'show') {
                switch (settings.videoStatus.popupCause) {
                    case 'pause':
                        if (settings.timeoutPopupObject.style.display != 'block') {
                            settings.cancelPopupObject.style.display = 'block';
                        }
                        break;
                    case 'timeout':
                        if (settings.cancelPopupObject.style.display != 'block') {
                            settings.timeoutPopupObject.style.display = 'block';
                        }
                        break;
                }

                return true;
            }
        }
    };
</script>


<script type="text/javascript">
    var glftSspVideoStateHandlerObject = {};
    var glftSspWsHandlerObject = {};

    var startAd = function () {
        // show video container
        document.getElementById('videoPlayerContainer').style.visibility = 'visible';

        // set the background for the ad as BLACK
        document.body.style.backgroundColor = "#000000";

        // display ad advertisment label
        document.getElementById('advertismentLabel').style.display = 'block';

        // trigger close button count down and display, give the video a chance to load
        if (!glftPlayerUtils.isRewardable()) {
            // start handling close button
            glftPlayerUtils.closeButtonHandler();

            // start handling info button
            glftPlayerUtils.infoButtonHandler();
        }

        glftSspVideoStateHandlerObject = new glftSspVideoStateHandler({
            videoDomObject: document.getElementById('videoObject'),
            videoStatus: videoStatus,
            timeoutPopupObject: document.getElementById('timeout_window'),
            cancelPopupObject: document.getElementById('cancel_video_popup')
        });
        glftSspVideoStateHandlerObject.startStateMonitoring();

        html5vast('videoObject', {
            additionalQuartileTracking: gladsTrackingUrls,
            tracker: glftSspTracker,
            router: glftSspRouter,
            clickthroughButton: document.getElementById('head_info_btn'),
            clickthroughOverlay: document.getElementById('videoObject'), // use the video object itself
            redirectionCache: redirectionCache
        });

        var videoObject = document.getElementById('videoObject');
        videoObject.play();

        // normal speed
        videoObject.playbackRate = 1;
    };

    var closeFunction = function () {
        glftSspRouter.redirect(videoStatus.exitString);
    };

    var glftSspBuddyPackIV = false;

    var enterScreenSrc = '{[enterScreenSrc]}';

    var glftSspToolsObject = new glftSspTools();

    document.addEventListener('DOMContentLoaded', function () {
        document.body.addEventListener('touchmove', function (e) {
            e.preventDefault();
        });
    });


    window.addEventListener('load', function () {
        var cancelYesButton = document.getElementById('cancel_yes');
        cancelYesButton.addEventListener(glftSspToolsObject.getClickEvent(), cancelYes);
        cancelYesButton.addEventListener('keypress', function (event) {
            if (event.keyCode == 13 || event.keyCode == 96) {
                this.blur();
                cancelYes();
            }
        });

        var cancelNoButton = document.getElementById('cancel_no');
        cancelNoButton.addEventListener(glftSspToolsObject.getClickEvent(), cancelNo);
        cancelNoButton.addEventListener('keypress', function (event) {
            if (event.keyCode == 13 || event.keyCode == 96) {
                this.blur();
                cancelNo();
            }
        });

        var cancelYesButtonTimeout = document.getElementById('pcEnd');
        cancelYesButtonTimeout.addEventListener(glftSspToolsObject.getClickEvent(), cancelYes);
        cancelYesButtonTimeout.addEventListener('keypress', function (event) {
            if (event.keyCode == 13 || event.keyCode == 96) {
                this.blur();
                cancelYes();
            }
        });

        var cancelNoButtonTimeout = document.getElementById('pcRetry');
        cancelNoButtonTimeout.addEventListener(glftSspToolsObject.getClickEvent(), cancelNo);
        cancelNoButtonTimeout.addEventListener('keypress', function (event) {
            if (event.keyCode == 13 || event.keyCode == 96) {
                this.blur();
                cancelNo();
            }
        });

        document.getElementById('head_close').addEventListener(glftSspToolsObject.getClickEvent(), closeFunction);
        document.getElementById('head_close').addEventListener('keypress', function () {
            if (event.keyCode == 13 || event.keyCode == 96) {
                this.blur();
                closeFunction();
            }
        });


        glftSspWsHandlerObject = new glftSspWsHandler({
            startAd: startAd,
            optinUrl: ''
        });

        if (wsType = glftSspWsHandlerObject.isWs()) {
            // glftSspBuddyPackIV == true && enterScreenSrc.indexOf('[enterScreenSrc]') == -1 && enterScreenSrc != ''
            glftSspWsHandlerObject.startWs(wsType);
        } else {
            startAd();
        }
    });
</script>
</body>
</html>