let r = s => {
    let rv = (s, len, o) => (len === 0) ? o : rv(s, --len, (o += s[len]));
    return rv(s, s.length, '');
  }
reverse()