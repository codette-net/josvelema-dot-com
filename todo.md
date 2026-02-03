
# josvelema.com – TODO v1
Week 1 : dinsdag → zaterdag (v1 live)

## Doel v1
- Persoonlijke website online
- Blog werkt via Markdown
- RSS + sitemap aanwezig
- Deploy automatisch of semi-automatisch
- “Goed genoeg” design (geen polish-hel)

---

## dinsdag – Core afmaken (blog + infra)
- [x] Controleren of blog posts correct laden
- [x] Slug + route `/blog/{slug}` werkt
- [x] Draft posts worden niet getoond
- [x] Datum sorting (nieuwste eerst)
- [x] Blog index pagina toont:
  - [x] Titel
  - [x] Datum
  - [x] Excerpt
- [x] RSS feed `/feed.xml`
- [x] Sitemap `/sitemap.xml`
- [ ] `<link rel="alternate" type="application/rss+xml">` in layout
- [ ] Robots.txt toevoegen (minimaal)

---

## woensdag – Styling & content
- [ ] Tailwind + Typography plugin actief
- [ ] Markdown rendering ziet er oké uit (`prose`)
- [ ] Basis layout:
  - [ ] Navigatie
  - [ ] Max width
- [ ] Homepagina:
  - [ ] Korte intro (wie je bent)
  - [ ] Link naar CV / Projects / Blog
- [ ] CV pagina:
  - [ ] Korte samenvatting
  - [ ] Skills / stack
- [ ] Projects pagina:
  - [ ] Minstens 1–2 projecten
- [ ] Contact pagina:
  - [ ] E-mail of link naar socials

---

## Donderdag – SEO & polish (light)
- [ ] Page titles per pagina
- [ ] Meta description (globaal)
- [ ] OpenGraph basics (site-wide)
- [ ] Sitemap check (bevat blogposts)
- [ ] RSS feed check (valide XML)
- [ ] 404 pagina (simpel)
- [ ] Cache blog posts (optioneel)

---

## Vrijdag – Deploy & checks
- [ ] Repo opschonen:
  - [ ] `.env.example` correct
  - [ ] `.gitignore` check
- [ ] README.md afmaken
- [ ] Hosting gekozen (Forge / VPS / Render / anders)
- [ ] App online:
  - [ ] `/` werkt
  - [ ] `/blog` werkt
  - [ ] `/blog/{slug}` werkt
  - [ ] `/feed.xml`
  - [ ] `/sitemap.xml`
- [ ] Eerste blogpost live
- [ ] Autodeploy ingesteld (of duidelijke deploy-stap)

---

## zaterdag – v1 afronden
- [ ] Laatste content check
- [ ] Mobile check (basic)
- [ ] Links nalopen
- [ ] Cache clear / config cache
- [ ] Domain live (josvelema.com)
- [ ] Announce:
  - [ ] LinkedIn
  - [ ] GitHub repo publiek
- [ ] Tag: `v1.0`

---

## Na v1 
- Categories / tags pages
- Search
- Pagination
- Images management
- Admin / CMS
- Comments
```

