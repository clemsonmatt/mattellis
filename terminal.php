<!DOCTYPE html>
<html>
<head>
    <title>Matt Ellis</title>

    <script src="public/js/jquery-2-2-0.min.js"></script>

    <style type="text/css">
        body {
            font-size: 14px;
            font-family: 'Lucida Console', sans-serif;
            letter-spacing: 1px;
            background-color: #000;
            line-height: 1.4em;
        }
        .container {
            margin: 3% auto;
            width: 800px;
            color: #fff;
        }

        /* console input */
        #console-input,
        #console-input:focus
        #console-input:hover {
            background-color: #000;
            color: #fff;
            width: calc(100% - 200px);
            font-size: 14px;
            font-family: 'Lucida Console', sans-serif;
            letter-spacing: 1px;
            outline: none;
            border: none;
        }

        .username {
            color: #0f0;
        }
        .start-command {
            color: #29c;
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="console">
            <div id="console-past">
                <div style="float: left; padding-right: 10px;"><span class="username">matt@ellis</span><span class="start-command">:~$</span></div>
            </div>
            <input id="console-input">
        </div>
    </div>


    <script>
        $(function(){
            $('#console-input').focus();

            var errorCommand        = 0;
            var newLine             = true;
            var commandHistory      = [];
            var commandHistoryCount = 1;

            Command.startUp();

            $('#console-input').keydown(function(e) {
                if (e.which == 13) {
                    var command = $(this).val();

                    commandHistory.push(command);
                    commandHistoryCount = 1;

                    $('#console-past').append(command);

                    switch (command.toLowerCase()) {
                        case "./startup.run":
                            errorCommand = 0;
                            Command.clearLog();
                            Command.startUp();
                            break;

                        case "./lotterypicker.run":
                            errorCommand = 0;
                            Command.lotteryPicker();
                            break;

                        case "./":
                            errorCommand = 0;
                            Command.moreInfo('Specify a .run file.', './filename.run');
                            break;

                        case "":
                            errorCommand = 0;
                            Command.nothing();
                            break;

                        case "ass":
                        case "damn":
                        case "damnit":
                        case "shit":
                        case "fuck":
                        case "fuck you":
                            errorCommand = 0;
                            newLine      = false;
                            Command.explicits();
                            break;

                        case "caitlyn":
                            errorCommand = 0;
                            newLine      = false;
                            Command.caitlyn();
                            break;

                        case "cat":
                            errorCommand = 0;
                            Command.moreInfo('Specify a .txt file.', 'cat about.txt');
                            break;

                        case "cat about.txt":
                            errorCommand = 0;
                            Command.aboutText();
                            break;

                        case "cat skills.txt":
                            errorCommand = 0;
                            Command.skillsText();
                            break;

                        case "clear":
                            errorCommand = 0;
                            Command.clearLog();
                            break;

                        case "easter eggs":
                            errorCommand = 0;
                            Command.easterEgg();
                            break;

                        case "hello":
                            errorCommand = 0;
                            newLine      = false;
                            Command.helloResponse();
                            break;

                        case "help":
                        case "?":
                        case "h":
                            errorCommand = 0;
                            Command.help();
                            break;

                        case "home":
                        case "exit":
                            errorCommand = 0;
                            Command.home();
                            break;

                        case "ls":
                            errorCommand = 0;
                            Command.ls();
                            break;

                        case "ls -l":
                            errorCommand = 0;
                            Command.lsl();
                            break;

                        case "open resume.pdf":
                            errorCommand = 0;
                            Command.openResume();
                            break;

                        case "open":
                            errorCommand = 0;
                            Command.moreInfo('Specify a .pdf file.', 'open filename.pdf');
                            break;

                        default:
                            errorCommand++;

                            if (errorCommand > 4) {
                                newLine      = false;
                                errorCommand = 0;
                                Command.tooManyErrors();
                                break;
                            };

                            Command.errorText(command);
                            break;
                    }

                    if (newLine) {
                        Command.newLine()
                    } else {
                        newLine = true;
                        $('#console-input').val("");
                    }

                } else if (e.which == 38) {
                    /* up arrow, show command history */
                    $('#console-input').val(commandHistory[commandHistory.length - commandHistoryCount]);
                    commandHistoryCount++;
                } else if (e.which == 40) {
                    /* up down, show command history */
                    commandHistoryCount--;
                    $('#console-input').val(commandHistory[commandHistory.length - commandHistoryCount]);
                }
            });
        });

        var Command = {
            aboutText: function() {
                var text = '<br><br>'
                    + 'My name is Matt Ellis. I graduated from Clemson University with a Bachelors of Science in Computer Science. Through my internship at the university, building web apps for the NCEES, and various freelance jobs; I have enjoyed learning many new languages and OOP skills. I have a passion for web development. I like building, designing, and structuring an application that not only functions, but promotes a good user experience. In my free time, I enjoy spending time on the lake with friends and family. My goal is to help build a better tomorrow through learning new technologies and never backing down from a challenge.'
                    + '<br><br>';
                $('#console-past').append(text);
            },

            caitlyn: function() {
                var message = '<br><br>'
                    + 'Caitlyn is the coolest <a>.</a><a>.</a><a>.</a> Period.'
                    + '<br><br>';

                Command.typeWriter(message);
            },

            clearLog: function() {
                $('#console-past').empty();
            },

            easterEgg: function() {
                $('#console-past').append('<br>I hear there are some around here.<br><br>');
            },

            errorText: function(command) {
                var errorText = '<br>'
                    + 'Command \"' + command + '\" not found.'
                    + '<br>';
                $('#console-past').append(errorText);
            },

            explicits: function() {
                var message = '<br>'
                    + 'Woah buddy!<br><br>'
                    + '<a></a>'
                    + ' No need for that kinda language<br><br>';

                Command.typeWriter(message);
            },

            helloResponse: function() {
                var message = '<br>'
                    + 'Howdy.<br><br>'
                    + 'I\'d love to chit-chat<a>,</a> but some of us have to work for a living.<a></a><a></a> Try sticking to one of the approved commands.'
                    + '<br><br>'
                Command.typeWriter(message);
            },

            help: function() {
                var helpText = '<br><br>'
                    + 'Matt Ellis (2016)<br>'
                    + 'To view this list, type: \'help\', \'h\', or \'?\'<br><br>'
                    + '<div style="margin-left: 15px;">'
                        + './filename.run<br>'
                        + 'cat filename.txt<br>'
                        + 'clear<br>'
                        + 'help<br>'
                        + 'ls [-l]<br>'
                        + 'open filename.pdf<br>'
                        + 'home'
                    + '</div>'
                    + '<br>';
                $('#console-past').append(helpText);
            },

            home: function() {
                window.location.href = '/';
            },

            lotteryPicker: function() {
                $('#console-past').append('<br><br>');

                var counter = 0;
                var num     = '';

                while (counter < 6) {
                    if (counter < 5) {
                        num = Math.floor((Math.random() * 69) + 1);
                    } else {
                        num = Math.floor((Math.random() * 26) + 1);
                    }

                    $('#console-past').append(num);

                    counter++;

                    if (counter < 5) {
                        $('#console-past').append('-');
                    } else if (counter != 6) {
                        $('#console-past').append(' / ');
                    }
                }

                $('#console-past').append('<br><br>');
            },

            ls: function() {
                var list = '<br>'
                    + 'about.txt '
                    + '<span style="color: #59e;">lotteryPicker.run</span> '
                    + 'resume.pdf '
                    + 'skills.txt '
                    + '<span style="color: #59e;">startUp.run</span> '
                    + '<br>';

                $('#console-past').append(list);
            },

            lsl: function() {
                var table = '<br>'
                    + '<table>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">-rw-r--r--@<td>'
                            + '<td style="padding: 0px 10px;">1</td>'
                            + '<td style="padding: 0px 10px;">mattellis</td>'
                            + '<td style="padding: 0px 10px;">staff</td>'
                            + '<td style="padding: 0px 10px;">684<td>'
                            + '<td style="padding: 0px 10px;">May 19 2015</td>'
                            + '<td style="padding: 0px 10px;">about.txt</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">-rw-r--r--@<td>'
                            + '<td style="padding: 0px 10px;">1</td>'
                            + '<td style="padding: 0px 10px;">mattellis</td>'
                            + '<td style="padding: 0px 10px;">staff</td>'
                            + '<td style="padding: 0px 10px;">3008<td>'
                            + '<td style="padding: 0px 10px;">Jan 03 2015</td>'
                            + '<td style="padding: 0px 10px;"><span style="color: #59e;">lotteryPicker.run</span></td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">-rw-r--r--@<td>'
                            + '<td style="padding: 0px 10px;">1</td>'
                            + '<td style="padding: 0px 10px;">mattellis</td>'
                            + '<td style="padding: 0px 10px;">staff</td>'
                            + '<td style="padding: 0px 10px;">84996<td>'
                            + '<td style="padding: 0px 10px;">Aug 29 21:27</td>'
                            + '<td style="padding: 0px 10px;">resume.pdf</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">-rw-r--r--@<td>'
                            + '<td style="padding: 0px 10px;">1</td>'
                            + '<td style="padding: 0px 10px;">mattellis</td>'
                            + '<td style="padding: 0px 10px;">staff</td>'
                            + '<td style="padding: 0px 10px;">1482<td>'
                            + '<td style="padding: 0px 10px;">May 19 2015</td>'
                            + '<td style="padding: 0px 10px;">skills.txt</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">-rw-r--r--@<td>'
                            + '<td style="padding: 0px 10px;">1</td>'
                            + '<td style="padding: 0px 10px;">mattellis</td>'
                            + '<td style="padding: 0px 10px;">staff</td>'
                            + '<td style="padding: 0px 10px;">1379<td>'
                            + '<td style="padding: 0px 10px;">Jan 02 2015</td>'
                            + '<td style="padding: 0px 10px;"><span style="color: #59e;">startUp.run</span></td>'
                        + '</tr>'
                    + '</table>';

                $('#console-past').append(table);
            },

            moreInfo: function(errorMsg, usage) {
                var message = '<br>'
                    + 'ERROR: ' + errorMsg
                    + '<br><br>Usage:<br>' + usage
                    + '<br><br>';

                $('#console-past').append(message);
            },

            newLine: function() {
                $('#console-past').append("<div style='float: left; padding-right: 10px;'><span class='username'>matt@ellis</span><span class='start-command'>:~$</span></div>");
                $('#console-input').val("");
            },

            nothing: function() {
                $('#console-past').append('<br>');
            },

            openResume: function() {
                window.open('/public/images/MattResume2017.pdf');
                $('#console-past').append('<br>');
            },

            skillsText: function() {
                var table = '<br>'
                    + '<p>Languages</p>'
                    + '<table>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">PHP<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">SQL</td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">JavaScript<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">AJAX</td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">JQuery<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Python</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">CSS/SASS<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">TypeScript</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">HTML<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">C</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">JQuery<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">C++</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">MySql<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">CoffeeScript</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Ruby<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Objective C</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Java<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Swift</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Twig<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;"></td>'
                            + '<td style="padding: 0px 10px;"></td>'
                        + '</tr>'
                    + '</table>'
                    + '<br>'
                    + '<p>Tools</p>'
                    + '<table>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">MVC Frameworks<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Ruby on Rails</td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Symfony<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Angular</td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">CodeIgniter<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Responsive Design</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Doctrine<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Apache</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">MS Office<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Nginx</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Bootstrap Framework<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Xcode</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Git & Github<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">AWS</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Git<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Android Studio</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Heroku<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">S3</td>'
                            + '<td style="padding: 0px 10px;">****-</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">GraphQL<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Electron</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Restful API<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Adobe Suite</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Object Oriented Design<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;">Android Studio</td>'
                            + '<td style="padding: 0px 10px;">***--</td>'
                        + '</tr>'
                        + '<tr>'
                            + '<td style="padding: 0px 10px;">Tower & Github Desktop<td>'
                            + '<td style="padding: 0px 10px;">*****</td>'
                            + '<td style="padding: 0px 10px;"></td>'
                            + '<td style="padding: 0px 10px;"></td>'
                        + '</tr>'
                    + '</table>'
                    + '<br>';

                $('#console-past').append(table);
            },

            startUp: function() {
                var str = './startUp.run<br><br>'
                    + 'Welcome to my web terminal!<br><br>'
                    + 'My name is Matt Ellis and I\'m a software developer. I specialize in web and mobile applications.<br><br><a>.</a><a>.</a><a>.</a>but I really just enjoy coding.<br><br>'
                    + 'Check out my GUI site <a href="/profile">here</a>, and take my terminal for a spin to see what all I have built. Just type \'help\' for a list of available commands.'
                    + '<br><br>PS:<a></a><a></a> Feel free to look for Easter Eggs :)'
                    + '<br><br>';

                Command.typeWriter(str);
            },

            tooManyErrors: function(command) {
                var message = '<br><br>'
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + ' Come on dude<br>'
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + ' Get it together and type an approved command.<br><br>'
                    + 'Type \'help\' if you forgot them '
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + '<a>.</a>'
                    + ' I know it\'s been a while since you actually typed something useful.<br><br>';

                Command.typeWriter(message);
            },

            typeWriter: function(str) {
                var i = 0;
                var isTag;
                var text;
                var fullText = '';
                var tag      = '';
                var timeout  = 25;

                type();

                function type() {
                    text     = str.slice(i, ++i);
                    fullText = str.slice(0, i);

                    var character = text.slice(-1);

                    if ( character === '<' ) {
                        isTag      = true;
                    }

                    if ( (character === '>' && tag.indexOf("a") == -1) || (character === '>' && tag.indexOf("/a") >= 0) ) {
                        isTag = false;
                        tag   = tag + text;
                        $('#console-past').append(tag);

                        tag     = '';
                        timeout = 500;
                    } else {
                        timeout = 25;
                    }

                    if (isTag) {
                        tag = tag + text;
                        return type();
                    }

                    if (text != '>') {
                        $('#console-past').append(text);
                    }

                    if (fullText === str) {
                        setTimeout(Command.newLine(), 100);
                        return
                    };

                    setTimeout(type, timeout);
                }
            },
        }
    </script>

</body>
</html>
