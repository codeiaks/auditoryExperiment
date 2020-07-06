% songID = {'p304_409.wav';'p286_307.wav';'p286_170.wav';'p302_063.wav';'p283_449.wav';'p279_376.wav';'p283_056.wav';'p279_295.wav';'p304_360.wav';'p279_336.wav';'p304_305.wav';'p302_110.wav';'p304_229.wav';'p283_354.wav';'p274_429.wav';'p237_188.wav';'p229_330.wav';'p274_281.wav';'p277_406.wav';'p277_441.wav';'p277_090.wav';'p277_299.wav';'p277_197.wav';'p274_243.wav';'p283_024.wav';'p283_373.wav';'p277_316.wav';'p283_128.wav'};
% transcript = {'we are not too surprised';'it was simply no contest';'full back was a bit of the unknown';'the quality of life is difficult for them';'if we were offered the scotsman i would buy it';'family liaison officers are now working to support the family';'for the meantime though the signs are good';'he should have won';'it_s a drop in the bucket';'the composer will conduct';'i can_t say that this is very usual';'i hope they understand that';'but he insisted that victory was possible';'my life is exactly the same';'i never had a childhood';'government will intervene';'it could have gone either way';'this will look at consumer attitudes';'they recorded their debut album in new york';'the shift in public perception about the disease is amazing';'otherwise it will cost a lot of money';'you are the glory';'it was worth a photograph';'i was released after six days';'this is a very common type of bow one showing mainly red and yellow with little or no green or blue';'but they have taken the lesson to heart';'off with their heads';'from it emerged a cup'};
% 
% fid = fopen(""INSERTAudio.sql", "w");
% 
% for i = 1:length(songID)
%     txtTP = sprintf(""INSERT INTO playlist (songID, transcripts) VALUES ('%s', '%s')\n", songID{i}, transcript{i}); 
%     fprintf(fid, txtTP);
% end
% fclose(fid);

%%
txt = [
    "INSERT INTO playlist (songID, type, transcripts) VALUES ('p304_409.wav', 'ILD', 'we are not too surprised');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p286_307.wav', 'ILD', 'it was simply no contest');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p286_170.wav', 'ILD', 'full back was a bit of the unknown');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p302_063.wav', 'ILD', 'the quality of life is difficult for them');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_449.wav', 'ILD', 'if we were offered the scotsman i would buy it');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p279_376.wav', 'ILD', 'family liaison officers are now working to support the family');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_056.wav', 'ILD', 'for the meantime though the signs are good');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p279_295.wav', 'ILD', 'he should have won');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p304_360.wav', 'ILD', 'it_s a drop in the bucket');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p279_336.wav', 'ILD', 'the composer will conduct');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p304_305.wav', 'ILD', 'i can_t say that this is very usual');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p302_110.wav', 'ILD', 'i hope they understand that');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p304_229.wav', 'ILD', 'but he insisted that victory was possible');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_354.wav', 'ILD', 'my life is exactly the same');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p274_429.wav', 'ITD', 'i never had a childhood');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p237_188.wav', 'ITD', 'government will intervene');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p229_330.wav', 'ITD', 'it could have gone either way');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p274_281.wav', 'ITD', 'this will look at consumer attitudes');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_406.wav', 'ITD', 'they recorded their debut album in new york');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_441.wav', 'ITD', 'the shift in public perception about the disease is amazing');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_090.wav', 'ITD', 'otherwise it will cost a lot of money');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_299.wav', 'ITD', 'you are the glory');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_197.wav', 'ITD', 'it was worth a photograph');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p274_243.wav', 'ITD', 'i was released after six days');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_024.wav', 'ITD', 'this is a very common type of bow one showing mainly red and yellow with little or no green or blue');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_373.wav', 'ITD', 'but they have taken the lesson to heart');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p277_316.wav', 'ITD', 'off with their heads');"
"INSERT INTO playlist (songID, types, transcripts) VALUES ('p283_128.wav', 'ITD', 'from it emerged a cup');"
];

txt_shuffled = txt(randperm(numel(txt)));

%%
fid = fopen("insertShuffledAudio.sql", "w");
for ii = 1:length(txt_shuffled)
    fprintf(fid, txt_shuffled{ii});
    fprintf(fid, "\n");
end
fclose(fid);

%%

