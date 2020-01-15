const io = socketIO(server);
io.on('connection', (socket) => {
  console.log('Client connected');
  socket.on('disconnect', () => console.log('Client disconnected'));
});
setInterval(() => io.emit('time', new Date().toTimeString()), 1000);
