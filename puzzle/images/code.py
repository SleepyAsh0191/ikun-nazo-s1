import collections

class B:
    def __init__(self):
        self.a = collections.deque()
    def b(self, x):
        self.a.append(x)
    def c(self):
        if not self.a:
            return None
        return self.a.popleft()
    def d(self):
        return len(self.a)
    def e(self):
        return self.d() == 0

def f(g, h):
    r = []
    i = 0
    for j in h:
        k = g(j)
        r.append(k)
        i += 1
    return r

def m(n, o):
    p = f(str, o)
    q = ""
    for r in p:
        if q == "":
            q = r
        else:
            q += n + r
    return q

class A:
    def __init__(self):
        self.a = B()
        self.b = []
    def c(self, v, w):
        x = self.h(v)
        y = self.h(w)
        z = self.j(x, y)
        for aa in range(z):
            ab = x[aa] if aa < len(x) else 0
            ac = y[aa] if aa < len(y) else 0
            self.a.b(("a", ab, ac, 0, aa))
        self.k()
        while len(self.b) > 1 and self.b[-1] == 0:
            self.b.pop()
        return int(self.g(self.b))
    def k(self):
        while not self.a.e():
            ad = self.a.c()
            if not ad:
                continue
            if ad[0] == "a":
                self.l(*ad[1:])
            elif ad[0] == "c":
                self.o(*ad[1:])
    def l(self, ae, af, ag, ah):
        ai = ae + af + ag
        aj = ai % 10
        ak = ai // 10
        self.n(ah, aj)
        if ak > 0:
            self.a.b(("c", ak, ah+1))
    def o(self, al, am):
        if am >= len(self.b):
            self.p(am - len(self.b) + 1)
        an = self.b[am] + al
        ao = an % 10
        ap = an // 10
        self.b[am] = ao
        if ap > 0:
            self.a.b(("c", ap, am+1))
    def n(self, aq, ar):
        if aq >= len(self.b):
            self.p(aq - len(self.b) + 1)
        self.b[aq] = ar
    def p(self, as_):
        self.b.extend([0]*as_)
    def h(self, at):
        au = []
        av = str(at)
        for aw in reversed(range(len(av))):
            au.append(int(av[aw]))
        return au
    def j(self, ax, ay):
        return max(len(ax), len(ay))
    def g(self, az):
        ba = []
        bb = len(az) - 1
        while bb >= 0:
            ba.append(az[bb])
            bb -= 1
        bc = m("", ba)
        return bc

def r(a, b):
    return A().c(a, b)

if __name__ == "__main__":
    a = 12354637347
    b = 123456765432
    c = r(a, b)
    print(c, c == a + b)
