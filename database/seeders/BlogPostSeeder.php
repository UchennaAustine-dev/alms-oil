<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'slug'         => 'pia-operational-impacts-downstream',
                'title'        => 'Petroleum Industry Act (PIA): Key Operational Impacts on Downstream Sourcing',
                'excerpt'      => 'The Petroleum Industry Act 2021 fundamentally restructures how downstream operators source, license, and price petroleum products across Nigeria. We break down what it means for your supply chain.',
                'category'     => 'Regulatory & Policy',
                'body'         => '<p>The Petroleum Industry Act (PIA) signed into law in August 2021 represents the most sweeping reform of Nigeria\'s oil and gas sector in decades. For downstream operators — distributors, retailers, and industrial consumers — the practical implications go well beyond the headlines about upstream deregulation.</p>

<h2>Licensing and Compliance Changes</h2>
<p>Under the PIA, the old DPR has been replaced by two successor bodies: the Nigerian Upstream Petroleum Regulatory Commission (NUPRC) for upstream activities and the Nigerian Midstream and Downstream Petroleum Regulatory Authority (NMDPRA) for midstream and downstream. All existing DPR licences required re-registration with the NMDPRA within specified transition periods.</p>
<p>For companies like Alms Oil, this meant a full compliance audit of our operational licences, depot agreements, and product-handling certifications — a process we completed ahead of the regulatory deadline.</p>

<h2>Pricing Framework and Deregulation</h2>
<p>One of the most consequential provisions of the PIA is the formal deregulation of petrol (PMS) pricing. While the practical implementation has been phased, the law removes the statutory basis for fixed pump prices, shifting the sector toward a market-reflective pricing model tied to crude costs, refinery gate prices, and logistics margins.</p>
<p>For bulk buyers and trading companies, this means greater price volatility but also more transparent pricing mechanisms. Forward contracts and supply agreements now carry more commercial significance as buyers seek to hedge against price swings.</p>

<h2>Supply Chain Implications</h2>
<p>The NMDPRA has introduced a more rigorous approval framework for product movement across state lines, with enhanced tracking requirements for tanker fleets. GPS telemetry on commercial fuel vehicles — which Alms Oil has operated since 2019 — is now a regulatory requirement rather than a competitive differentiator.</p>

<h2>What This Means for Your Operations</h2>
<p>Businesses dependent on regular petroleum supply should review their supplier agreements to ensure compliance language reflects the new regulatory framework. Supply contracts should explicitly reference NMDPRA licensing status, include product quality certification clauses, and specify dispute resolution under the new regulatory regime.</p>
<p>Alms Oil\'s commercial team can assist with reviewing your supply arrangements for PIA compliance. <a href="/contact">Contact us</a> to schedule a consultation.</p>',
                'author'       => 'Alms Oil Editorial',
                'author_role'  => 'Commercial Intelligence Desk',
                'read_time'    => '5 min read',
                'featured'     => true,
                'published'    => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'slug'         => 'optimizing-commercial-fleet-fuel-logistics',
                'title'        => 'Optimizing Commercial Fleet Fuel Logistics Across All 36 Nigerian States',
                'excerpt'      => 'Managing fuel logistics for a commercial fleet spread across Nigeria\'s 36 states requires more than just a good supplier. Here\'s the operational framework that reduces cost and downtime.',
                'category'     => 'Logistics & Fleet',
                'body'         => '<p>Running a commercial fleet in Nigeria means navigating one of the world\'s most complex fuel supply environments — variable pump availability, road infrastructure constraints, state-by-state price differentials, and the constant threat of product adulteration. Yet the companies that master this challenge gain a significant cost and operational advantage over competitors.</p>

<h2>The True Cost of Decentralised Fuel Procurement</h2>
<p>Most fleet operators default to a decentralised approach: drivers fill up wherever they happen to be, submit receipts, and finance reconciles the spend at month-end. This is convenient but expensive. Without bulk purchasing power, you pay retail pump prices at every transaction. Without GPS telemetry correlation, you cannot verify that fuel purchases match actual vehicle consumption.</p>
<p>Studies of Nigerian commercial fleets consistently show that decentralised procurement inflates fuel costs by 15–25% versus a structured supply agreement with a licensed bulk supplier.</p>

<h2>Depot-to-Site Delivery: The Operational Alternative</h2>
<p>For fleets operating from fixed bases — logistics hubs, construction sites, industrial facilities, or generator farms — depot-to-site delivery eliminates the retail premium entirely. Fuel is procured at bulk rates, transported by a licensed haulier, and delivered directly into your on-site storage.</p>
<p>The economics improve significantly at scale. A fleet consuming 50,000 litres of AGO per month can typically achieve savings of ₦2–4 per litre versus retail procurement — a material annual saving at current price levels.</p>

<h2>GPS Telemetry and Consumption Verification</h2>
<p>Alms Oil\'s fleet management clients receive delivery documentation that correlates directly with our GPS dispatch logs. Every delivery is timestamped, geo-tagged at loading and unloading, and accompanied by a signed certificate of quantity and quality. This documentation package is designed to integrate with fleet management systems for automated consumption reconciliation.</p>

<h2>Route Planning for 36-State Coverage</h2>
<p>Nationwide fuel delivery requires active relationships with certified depots in each geopolitical zone. Alms Oil maintains supply relationships across Lagos, Abuja, Port Harcourt, Kano, Enugu, and Kaduna, enabling same-day or next-day delivery to most commercial centres and 48-hour coverage to remote locations.</p>
<p>To discuss a fleet supply arrangement, <a href="/contact">contact our logistics team</a>.</p>',
                'author'       => 'Alms Oil Logistics Desk',
                'author_role'  => 'Fleet & Distribution Intelligence',
                'read_time'    => '4 min read',
                'featured'     => false,
                'published'    => true,
                'published_at' => now()->subDays(7),
            ],
            [
                'slug'         => 'bulk-fuel-quality-assurance-guide',
                'title'        => 'Bulk Fuel Quality Assurance: Preventing Contamination in Generator & Industrial Supplies',
                'excerpt'      => 'Contaminated diesel is the leading cause of generator failure and industrial equipment downtime in Nigeria. A structured QA protocol at the point of supply is your best defence.',
                'category'     => 'Quality Assurance',
                'body'         => '<p>Diesel fuel contamination is one of the most underreported operational risks in Nigerian industry. From manufacturing plants and data centres to hotels and hospitals, the damage caused by off-spec fuel flowing through generator sets and industrial engines runs into billions of naira each year — most of it attributable to supply chain failures that are entirely preventable.</p>

<h2>Understanding the Contamination Vectors</h2>
<p>Contamination of bulk diesel (AGO) typically occurs at one of three points: at the depot during loading, in-transit due to tanker cleanliness or product mixing, or at the point of storage due to water ingress or tank residue. Each vector requires a different control measure.</p>
<p><strong>At-depot contamination</strong> is most often caused by product blending — cheap kerosene or low-grade gas oil introduced to increase volume. The visual test (comparing product colour against a certified sample) is a basic but useful first check. Density measurement with a calibrated hydrometer provides more reliable detection of blended products.</p>

<h2>The Alms Oil Quality Protocol</h2>
<p>Every product dispatched by Alms Oil undergoes a four-stage quality verification process:</p>
<ul>
<li><strong>Depot certification:</strong> We only load from NMDPRA-certified depots with active product quality records.</li>
<li><strong>Pre-loading sample:</strong> A sample is drawn from the loading arm before tanker filling begins and tested against the certified depot specification.</li>
<li><strong>Post-loading seal:</strong> Tanker compartments are sealed immediately after loading, with tamper-evident seals logged against the waybill.</li>
<li><strong>Delivery sample:</strong> A delivery sample is offered to the receiving client at point of discharge. This sample can be sent for independent laboratory analysis if required.</li>
</ul>

<h2>Storage Best Practices</h2>
<p>Even certified-quality fuel degrades rapidly in poorly maintained storage tanks. Key practices include: keeping tanks at least 80% full to minimise water condensation space; installing water-absorbing filter elements on tank vents; scheduling quarterly tank bottom inspections for water and sediment; and maintaining a sample log for every delivery received.</p>

<h2>Working with a Quality-Certified Supplier</h2>
<p>The most effective quality assurance measure is selecting a supplier whose internal protocols make contamination structurally difficult. ISO 9001:2015 certification — which Alms Oil holds — requires documented quality management procedures, internal audit trails, and corrective action processes for any non-conformance.</p>
<p>For a copy of our quality assurance documentation or to discuss your specific fuel quality requirements, <a href="/contact">contact our commercial team</a>.</p>',
                'author'       => 'Alms Oil Technical Team',
                'author_role'  => 'Quality & HSE Division',
                'read_time'    => '6 min read',
                'featured'     => false,
                'published'    => true,
                'published_at' => now()->subDays(12),
            ],
            [
                'slug'         => 'tank-farm-investment-guide-nigeria',
                'title'        => 'Tank Farm Investment in Nigeria: What You Need to Know Before Breaking Ground',
                'excerpt'      => 'Private petroleum storage infrastructure is one of the most capital-efficient energy investments available in Nigeria today — if you get the design, regulatory, and operational fundamentals right from the start.',
                'category'     => 'Infrastructure',
                'body'         => '<p>Demand for private petroleum storage capacity in Nigeria has never been stronger. With the removal of the fuel subsidy, the economics of private depot ownership have fundamentally shifted — operators who control their own storage can now capture margin across the full supply chain, from depot gate to end consumer.</p>

<h2>The Business Case for Private Storage</h2>
<p>A modestly sized tank farm — say, four above-ground storage tanks with a combined capacity of 2,000 kilolitres — can generate throughput revenue from third-party storage, price arbitrage opportunities during supply disruptions, and direct margin on retail or industrial sales. At current AGO throughput margins, a facility of this scale can achieve payback in 4–6 years under conservative assumptions.</p>

<h2>Regulatory Requirements</h2>
<p>Tank farm development in Nigeria requires approvals from the NMDPRA (primary regulator), the relevant State Ministry of Environment, the local government authority, and — depending on location — the Federal Ministry of Works for access road approvals. The total approval timeline typically runs 8–14 months for a new facility.</p>
<p>Engaging a licensed contractor with an established relationship with the NMDPRA inspectorate substantially compresses this timeline. Alms Oil has managed the approval process for multiple third-party tank farm projects.</p>

<h2>Design Considerations</h2>
<p>Tank selection involves trade-offs between capacity, product compatibility, and cost. Vertical cylindrical tanks are the standard for AGO and PMS storage. Horizontal tanks suit smaller volumes and space-constrained sites. Floating roof tanks are specified for high-volatility products like PMS on larger facilities to minimise evaporative losses.</p>
<p>Bunding requirements under Nigerian regulations mandate secondary containment capable of holding 110% of the largest tank volume. This is a non-negotiable design element that is frequently underspecified by inexperienced contractors — with costly retrofit implications.</p>

<h2>Operational Readiness</h2>
<p>Infrastructure alone does not make a functioning depot. Product sourcing agreements, trained operational staff, a metering and inventory management system, and HSE emergency response procedures must all be in place before the NMDPRA will issue an operating licence.</p>
<p>Alms Oil provides turnkey project management for tank farm development, including design, procurement, construction, and operational commissioning. <a href="/contact">Start a conversation</a> with our infrastructure team.</p>',
                'author'       => 'Alms Oil Infrastructure Desk',
                'author_role'  => 'Energy Infrastructure Division',
                'read_time'    => '7 min read',
                'featured'     => false,
                'published'    => true,
                'published_at' => now()->subDays(18),
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(['slug' => $post['slug']], $post);
        }

        $this->command->info('Blog posts seeded successfully (' . count($posts) . ' posts).');
    }
}
