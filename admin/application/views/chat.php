<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            position: relative;
        }

        .chat-box {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: flex-end;
        }

        .message {
            padding: 10px 15px;
            margin: 5px;
            max-width: 80%;
            border-radius: 10px;
            font-size: 14px;
        }

        .message.sent {
            align-self: flex-end;
            background-color: #4caf50;
            color: white;
        }

        .message.received {
            align-self: flex-start;
            background-color: #e0e0e0;
            color: black;
        }

        .input-area {
            display: flex;
            margin-top: 10px;
        }

        .input-area input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 14px;
        }

        .input-area button {
            padding: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            border-radius: 0 5px 5px 0;
            font-size: 14px;
            cursor: pointer;
        }

        .input-area button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h3 class="text-center" style="margin-top: 1cm;">Chat Member</h3>
    <div class="container bg-success" style="height: 17cm; margin-top: 1cm;">
        <div class="chat-box">
            <!-- Example chat messages -->
            <div class="message sent">Hello! How can I help you?</div>
            <div class="message received">Hi, I need some assistance.</div>
        </div>

        <!-- Input area -->
        <div class="input-area">
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const messageInput = document.getElementById('messageInput');
            const chatBox = document.querySelector('.chat-box');

            // Get the input value
            const message = messageInput.value.trim();
            if (message === '') return;

            // Create a new message element
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'sent');
            messageElement.textContent = message;

            // Append the message to the chat box
            chatBox.appendChild(messageElement);

            // Clear the input field
            messageInput.value = '';

            // Scroll to the bottom of the chat box
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</body>

</html>
