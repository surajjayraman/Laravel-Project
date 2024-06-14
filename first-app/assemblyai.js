// npm install assemblyai

// import { AssemblyAI } from "assemblyai";

import { AssemblyAI } from "assemblyai";

const client = new AssemblyAI({
    apiKey: "4eb546e9f4124f34bd23e2e76cc74cb8",
});

const audioUrl =
    "https://storage.googleapis.com/aai-web-samples/5_common_sports_injuries.mp3";

const config = {
    audio_url: audioUrl,
};

const run = async () => {
    const transcript = await client.transcripts.transcribe(config);
    console.log(transcript.text);
};

run();
