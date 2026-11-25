<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keja Mtaani - House Assistant</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Main page -->
    <div class="min-h-screen flex items-center justify-center">

        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">
                Keja Mtaani
            </h1>

            <p class="mt-3 text-gray-500">
                Find your next home with ease.
            </p>
        </div>

    </div>


    <!-- Chatbot Button -->
    <button
        id="openChatbot"
        class="fixed bottom-6 right-6 w-16 h-16 rounded-full
               bg-blue-600 hover:bg-blue-700
               text-white text-2xl shadow-lg
               flex items-center justify-center
               transition duration-200"
    >
        💬
    </button>


    <!-- Chatbot -->
    <div
        id="chatbot"
        class="hidden fixed bottom-24 right-6
               w-[380px] max-w-[calc(100vw-2rem)]
               h-[550px]
               bg-white rounded-2xl shadow-2xl
               overflow-hidden
               flex-col"
    >

        <!-- Header -->
        <div class="bg-blue-600 text-white px-5 py-4
                    flex items-center justify-between">

            <div>
                <h2 class="font-semibold text-lg">
                    🏠 Keja Assistant
                </h2>

                <p class="text-sm text-blue-100">
                    Find a house that suits you
                </p>
            </div>

            <button
                id="closeChatbot"
                class="text-2xl hover:text-blue-200"
            >
                &times;
            </button>

        </div>


        <!-- Messages -->
        <div
            id="messages"
            class="flex-1 overflow-y-auto bg-gray-50 p-4 space-y-4"
        >

            <!-- Bot message -->
            <div class="flex items-start gap-2">

                <div
                    class="w-8 h-8 rounded-full bg-blue-100
                           flex items-center justify-center
                           flex-shrink-0"
                >
                    🏠
                </div>

                <div
                    class="bg-white border border-gray-200
                           rounded-2xl rounded-tl-none
                           px-4 py-3 max-w-[80%]"
                >
                    <p class="text-sm text-gray-700">
                        👋 Hi! I'm Keja Assistant.
                    </p>

                    <p class="text-sm text-gray-700 mt-2">
                        I can help you find a house.
                        Tell me what you're looking for.
                    </p>
                </div>

            </div>


            <!-- Suggested searches -->
            <div class="ml-10 flex flex-wrap gap-2">

                <button
                    class="suggestion px-3 py-2
                           text-sm border border-blue-200
                           text-blue-600 rounded-full
                           hover:bg-blue-50"
                    data-message="I am looking for a 1 bedroom house"
                >
                    🏠 1 Bedroom
                </button>

                <button
                    class="suggestion px-3 py-2
                           text-sm border border-blue-200
                           text-blue-600 rounded-full
                           hover:bg-blue-50"
                    data-message="I am looking for a 2 bedroom house"
                >
                    🏠 2 Bedroom
                </button>

                <button
                    class="suggestion px-3 py-2
                           text-sm border border-blue-200
                           text-blue-600 rounded-full
                           hover:bg-blue-50"
                    data-message="Show me houses under 30000"
                >
                    💰 Under Ksh 30k
                </button>

            </div>

        </div>


        <!-- Input -->
        <div class="border-t border-gray-200 bg-white p-3">

            <div class="flex items-center gap-2">

                <input
                    id="messageInput"
                    type="text"
                    placeholder="What kind of house are you looking for?"
                    class="flex-1 border border-gray-300
                           rounded-full px-4 py-3
                           text-sm
                           focus:outline-none
                           focus:ring-2
                           focus:ring-blue-500"
                >

                <button
                    id="sendMessage"
                    class="w-11 h-11
                           bg-blue-600 hover:bg-blue-700
                           text-white rounded-full
                           flex items-center justify-center
                           transition"
                >
                    ➤
                </button>

            </div>

            <p class="text-xs text-gray-400 text-center mt-2">
                Keja Assistant can help you search available houses.
            </p>

        </div>

    </div>


    <script>

        const openChatbot = document.getElementById('openChatbot');
        const closeChatbot = document.getElementById('closeChatbot');

        const chatbot = document.getElementById('chatbot');

        const messageInput = document.getElementById('messageInput');
        const sendMessage = document.getElementById('sendMessage');

        const messages = document.getElementById('messages');


        // Open chatbot
        openChatbot.addEventListener('click', () => {

            chatbot.classList.remove('hidden');
            chatbot.classList.add('flex');

            messageInput.focus();

        });


        // Close chatbot
        closeChatbot.addEventListener('click', () => {

            chatbot.classList.add('hidden');
            chatbot.classList.remove('flex');

        });


        // Add message to chat
        function addMessage(message, sender) {

            const messageWrapper = document.createElement('div');

            if (sender === 'user') {

                messageWrapper.className =
                    'flex justify-end';

                messageWrapper.innerHTML = `
                    <div class="bg-blue-600 text-white
                                rounded-2xl rounded-tr-none
                                px-4 py-3 max-w-[80%]">

                        <p class="text-sm">
                            ${message}
                        </p>

                    </div>
                `;

            } else {

                messageWrapper.className =
                    'flex items-start gap-2';

                messageWrapper.innerHTML = `
                    <div class="w-8 h-8 rounded-full
                                bg-blue-100
                                flex items-center justify-center
                                flex-shrink-0">

                        🏠

                    </div>

                    <div class="bg-white
                                border border-gray-200
                                rounded-2xl rounded-tl-none
                                px-4 py-3 max-w-[80%]">

                        <p class="text-sm text-gray-700">
                            ${message}
                        </p>

                    </div>
                `;
            }

            messages.appendChild(messageWrapper);

            messages.scrollTop = messages.scrollHeight;
        }


        // Send message
        function sendUserMessage() {

            const message = messageInput.value.trim();

            if (!message) {
                return;
            }

            addMessage(message, 'user');

            messageInput.value = '';

            // Temporary response
            setTimeout(() => {

                addMessage(
                    "I'm still being connected to the house database. 😊",
                    'bot'
                );

            }, 500);

        }


        sendMessage.addEventListener('click', sendUserMessage);


        // Send using Enter
        messageInput.addEventListener('keydown', (event) => {

            if (event.key === 'Enter') {

                sendUserMessage();

            }

        });


        // Suggested searches
        document.querySelectorAll('.suggestion').forEach(button => {

            button.addEventListener('click', () => {

                const message = button.dataset.message;

                addMessage(message, 'user');

                setTimeout(() => {

                    addMessage(
                        "I'm still being connected to the house database. 😊",
                        'bot'
                    );

                }, 500);

            });

        });

    </script>

</body>
</html>