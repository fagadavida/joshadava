<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h2>Chat with our agent</h2>

    <div id="messages" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc;"></div>

    <form id="chat-form">
        <input type="text" id="username" placeholder="Your name" required>
        <input type="text" id="message" placeholder="Your message" required>
        <button type="submit">Send</button>
    </form>

    <script>
        const messagesDiv = document.getElementById('messages');
        let lastId = 0;

        const evtSource = new EventSource(`/stream?last_id=${lastId}`);

        evtSource.onmessage = function(event) {
            const msg = JSON.parse(event.data);
            // lastId = msg.id;
            console.log(msg)
            const line = `<p><strong>${msg.id} ${msg.username}:</strong> ${msg.message}</p>`;
            messagesDiv.innerHTML += line;
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        };

        document.getElementById('chat-form').addEventListener('submit', function(e) {
            e.preventDefault();

            fetch('/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    username: document.getElementById('username').value,
                    message: document.getElementById('message').value
                })
            });
        });
    </script>
</body>
</html>
